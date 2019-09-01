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
            echo "<pre>";
            print_r($tagsInsert);
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
            echo $query;
            $this->conexao->exec($query);
        }

        public function getTagsConteudo($idConteudo){
            $query = "select tag from tag,conteudoTag where fk_ct_idTag = idTag and fk_ct_idConteudo = {$idConteudo};";
            
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
    }

    //$t = new Tag();
   // echo "<pre>";
    //print_r($t->getTags());
    //print_r($t->getTagsConteudo(70));