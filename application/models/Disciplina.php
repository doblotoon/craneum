<?php
    require_once "Conexao.php";

    class Disciplina{
        public $conexao;

        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }
        
        public function cadastroDisciplina($disciplina){
            try{
                $query = "insert into disciplina (disciplina) values ('{$disciplina}');";
                $this->conexao->exec($query);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //print_r($disciplina);
        }

        public function excluirDisciplina($id){
            try{
                $query = "delete from disciplina where idDisciplina = {$id};";
                $this->conexao->exec($query);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //print_r($disciplina);
        }

        public function cadastroDisciplinaConteudo($ultimaId){
            //echo $ultimaId;
            $disciplinas = json_decode(file_get_contents("../controllers/disciplinas.txt"),true);
            $disciplinasInsert = [];
            foreach ($disciplinas as $key => $value) {
                $queryDisciplinas = "select idDisciplina from disciplina where disciplina = '{$value}';";
                $disciplinaExistente = $this->conexao->query($queryDisciplinas)->fetch(PDO::FETCH_ASSOC);
                $disciplinasInsert[] = $disciplinaExistente['idDisciplina'];
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

        public function editarDisciplina($id, $disciplina){
            try {
                $query = "update disciplina set disciplina = '{$disciplina}' where idDisciplina = {$id};";
                $this->conexao->exec($query);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function atualizarDisciplinaConteudo($idConteudo){
            $disciplinasAtualizadas = json_decode(file_get_contents("../controllers/disciplinasAtualizadas.txt"),true);
            $disciplinasInsert = [];
            $disciplinasAntigas = $this->conexao->query("select idDisciplina from disciplina,conteudodisciplina,conteudo where fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = idConteudo and idConteudo = {$idConteudo};")->fetchAll(PDO::FETCH_ASSOC);
            foreach ($disciplinasAtualizadas as $key => $value) {
                $queryDisciplinas = "select idDisciplina from disciplina where disciplina = '{$value}';";
                $disciplinaExistente = $this->conexao->query($queryDisciplinas)->fetch(PDO::FETCH_ASSOC);
                $disciplinasInsert[] = $disciplinaExistente['idDisciplina'];
            }
            //print_r($disciplinasAntigas);
            foreach ($disciplinasAntigas as $k => $discip) {
                $this->conexao->exec("delete from conteudodisciplina where fk_cd_idDisciplina = {$discip['idDisciplina']};");
            }
            //print_r($disciplinasInsert);
            $this->disciplinaConteudo($idConteudo,$disciplinasInsert);
        }
    }

    //$a = new Disciplina();
    //$a->atualizarDisciplinaConteudo(126);



    //$t = new Tag();
   // echo "<pre>";
    //print_r($t->getTags());
    //print_r($t->getTagsConteudo(70));
    //$a = new Disciplina();
    //$a->cadastroDisciplina(126);
    //print_r($a->getDisciplinasConteudo(126));