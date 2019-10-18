<?php
    require_once "Conexao.php";

    class Disciplina{
        public $conexao;

        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }
        
        public function cadastroDisciplina($disciplina){
            print_r($disciplina);
        }

        public function cadastroDisciplinaConteudo($ultimaId){
            //echo $ultimaId;
            $disciplinas = json_decode(file_get_contents("../controllers/disciplinas.txt"),true);
            $disciplinasInsert = [];
            foreach ($disciplinas as $key => $value) {
        /*        $query = "select disciplina from disciplina where disciplina = '{$value}';";
                $linhas = $this->conexao->query($query);
                //echo $linhas->rowCount();
                //echo "caiu no try\n";
    
                if ($linhas->rowCount()==0) {
                    ucwords($value);
                    $queryInsert = "insert into disciplina(disciplina) values ('{$value}');";
                    $queryLastId = "";
                    $this->conexao->exec($queryInsert);
                    $ultimaDisciplina = $this->conexao->query("select max(idDisciplina) as idDisciplina from disciplina limit 1;")->fetch(PDO::FETCH_ASSOC);
                    $disciplinasInsert[] = $ultimaDisciplina['idDisciplina'];
                }else{
                    $queryDisciplinas = "select idDisciplina from disciplina where disciplina = '{$value}';";
                    $disciplinaExistente = $this->conexao->query($queryDisciplinas)->fetch(PDO::FETCH_ASSOC);
                    $disciplinasInsert[] = $disciplinaExistente['idDisciplina'];
                }
             */   
            }
            //echo "<pre>";
            //print_r($disciplinasInsert);
            $this->disciplinaConteudo($ultimaId,$disciplinasInsert);
        }


        public function disciplinaConteudo($idConteudo,$idDisciplinas){
            $queryDin = " values ";
            $tamanho = sizeof($idDisciplinas);
            $cont = 1;
            foreach ($idDisciplinas as $key => $disciplina) {
                if ($cont!=$tamanho) {
                    $queryDin .= "({$disciplina},{$idConteudo}),";
                    $cont++;
                }else{
                    $queryDin .= "({$disciplina},{$idConteudo});";
                }
            }
            $query = "insert into conteudodisciplina(fk_cd_idDisciplina,fk_cd_idConteudo)".$queryDin;
            //echo $query;
            $this->conexao->exec($query);
        }

        public function getDisciplinasConteudo($idConteudo){
            $query = "select disciplina from disciplina,conteudodisciplina where fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = {$idConteudo};";
            
            $disciplinasConteudo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            return $disciplinasConteudo;
        }

        public function getDisciplinas(){
            $query = "select disciplina from disciplina;";
            $disciplinaArray = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($disciplinaArray as $key => $disciplina) {
                $disciplinas[] = $disciplina['disciplina'];
            }
            return $disciplinas;
        }
        public function getAllDisciplinas(){
            $query = "select * from disciplina;";
            $disciplinaArray = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            foreach ($disciplinaArray as $key => $disciplina) {
                $disciplinas[] = [
                                    "idDisciplina"=>$disciplina['idDisciplina'],
                                    "disciplina"=>$disciplina['disciplina']
                                ];
            }
            return $disciplinas;
        }
    }

    //$t = new Tag();
   // echo "<pre>";
    //print_r($t->getTags());
    //print_r($t->getTagsConteudo(70));
    //$a = new Disciplina();
    //$a->cadastroDisciplina(126);
    //print_r($a->getDisciplinasConteudo(126));