<?php
    require_once "Conexao.php";

    class Tag{
        public $conexao;

        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }
        public function cadastroTag($ultimaId){
            echo $ultimaId;
            $tags = json_decode(file_get_contents("../controllers/tags.txt"),true);
            $tagsInsert = [];
            foreach ($tags as $key => $value) {
                $query = "select tag from tag where tag = '{$value}';";
                $linhas = $this->conexao->query($query);
                //echo $linhas->rowCount();
                //echo "caiu no try\n";
    
                if ($linhas->rowCount()==0) {
                    ucwords($value);
                    $queryInsert = "insert into tag(tag) values ('{$value}');";
                    $queryLastId = "";
                    $this->conexao->exec($queryInsert);
                    $ultimaTag = $this->conexao->query("select max(idTag) as idTag from tag limit 1;")->fetch(PDO::FETCH_ASSOC);
                    $tagsInsert[] = $ultimaTag['idTag'];
                }else{
                    $queryTags = "select idTag from tag where tag = '{$value}';";
                    $tagExistente = $this->conexao->query($queryTags)->fetch(PDO::FETCH_ASSOC);
                    $tagsInsert[] = $tagExistente['idTag'];
                }
                
            }
            //echo "<pre>";
            //print_r($tagsInsert);
            $this->tagConteudo($ultimaId,$tagsInsert);
        }


        public function tagConteudo($idConteudo,$idTags){
            $queryDin = " values ";
            $tamanho = sizeof($idTags);
            $cont = 1;
            foreach ($idTags as $key => $tag) {
                if ($cont!=$tamanho) {
                    $queryDin .= "({$tag},{$idConteudo}),";
                    $cont++;
                }else{
                    $queryDin .= "({$tag},{$idConteudo});";
                }
            }
            $query = "insert into conteudotag(fk_ct_idTag,fk_ct_idConteudo)".$queryDin;
            //echo $query;
            $this->conexao->exec($query);
        }

        public function getTagsConteudo($idConteudo){
            $query = "select tag from tag,conteudotag where fk_ct_idTag = idTag and fk_ct_idConteudo = {$idConteudo};";
            
            $tagsConteudo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            return $tagsConteudo;
        }

        public function getTags(){
            $query = "select tag from tag;";
            $tagArray = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tagArray as $key => $tag) {
                $tags[] = $tag['tag'];
            }
            return $tags;
        }

        public function atualizarTag($idConteudo){
            //echo $ultimaId;
            $tagsAtuais = json_decode(file_get_contents("../controllers/tagsAtualizadas.txt"),true);
            $tagsInsert = [];
            $tagsAntigas = $this->conexao->query("select idTag from tag, conteudotag, conteudo where idTag = fk_ct_idTag and fk_ct_idConteudo = idConteudo and idConteudo = {$idConteudo};")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($tagsAntigas as $key => $anTag) {
                $idsAntigas[] = $anTag['idTag'];
            }            

            //pega a id das tags que ja existem e sao atualizadas
            foreach ($tagsAtuais as $k => $tagAtual) {
                $queryAtual = "select idTag from tag where tag = '{$tagAtual}';";
                $atuais = $this->conexao->query($queryAtual)->fetch(PDO::FETCH_ASSOC);
                $idAtuais[] = $atuais['idTag'];//] = $tagAtual;
                $tagsExistentes[] = $tagAtual;
                $tagsIdExiste[$atuais['idTag']] = $tagAtual;
            }

            //descubro quais ja estao no conteudo tag, essas eu nao mexo
            $quaisTao = array_intersect($idAtuais,$idsAntigas);
            $quaisApagar = array_diff($idsAntigas,$quaisTao);
            //print_r($idsAntigas);
            //print_r($quaisTao);
            //print_r($quaisApagar);
            //excluo qual ja ta no conteudo tag
            foreach ($idAtuais as $key => $id) {
                if (in_array($id,$quaisTao)) {
                    unset($idAtuais[$key]);
                    unset($tagsIdExiste[$id]);
                }
            }
            //tags novas/existentes
            //print_r($tagsAtuais);

            //tags que ja tao cadastradas
            //print_r($tagsIdExiste);
            $tagsExisteNovas = [];
            $tagsNovas = [];
            //diferencia tag que nao existe das que ja existem no banco
            foreach ($tagsIdExiste as $chave => $tagNova) {
                if ($chave==null) {
                    $tagsNovas[] = $tagNova;
                }else{
                    $tagsExisteNovas[$chave] = $tagNova;
                }
            }
            
            foreach ($tagsNovas as $key => $tagNovinha) {
                $this->conexao->exec("insert into tag (tag) values ('{$tagNovinha}');");
                $idTagNova = $this->conexao->query("select max(idTag) as idTag from tag limit 1;")->fetch(PDO::FETCH_ASSOC);
                $this->conexao->exec("insert into conteudotag (fk_ct_idTag, fk_ct_idConteudo) values ({$idTagNova['idTag']},{$idConteudo});");
            }
            
            foreach ($tagsExisteNovas as $idTag => $tagEN) {
                $this->conexao->exec("insert into conteudotag (fk_ct_idTag, fk_ct_idConteudo) values ({$idTag},{$idConteudo});");
            }

            foreach ($quaisApagar as $key => $idApagar) {
                $this->conexao->exec("delete from conteudotag where fk_ct_idTag = {$idApagar} and fk_ct_idConteudo = {$idConteudo};");
            }   
        }

    }

    //$t = new Tag();
    //$t->atualizarTag(150);
    // echo "<pre>";
    //print_r($t->getTags());
    //print_r($t->getTagsConteudo(70));