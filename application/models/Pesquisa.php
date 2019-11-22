<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "Conexao.php";
class Pesquisa {

    public $conexao;

    public function __construct(){
        $conexao_objeto = new Conexao();
        $this->conexao = $conexao_objeto->getConexao();
    }
    
    
    public function disciplinaConteudoPesquisa($idConteudo){
        $query = "select disciplina from disciplina,conteudodisciplina where fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = {$idConteudo};";
            
            $disciplinasConteudoPesquisa = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            return $disciplinasConteudoPesquisa;
    }


    public function pesquisaGeral($termoPesquisado){
        
        $query = "SELECT DISTINCT idConteudo, titulo, fotoCapa, nome FROM conteudo, conteudodisciplina, disciplina, conteudotag, tag, usuario WHERE (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag and fk_cont_idUsuario = idUsuario) and (disciplina like '%{$termoPesquisado}%' or titulo like '%{$termoPesquisado}%' or tag like '%{$termoPesquisado}%');";

        try {
            $resultado = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function pesquisaTitulo($termoPesquisado){

        $query = "SELECT DISTINCT idConteudo, titulo, fotoCapa, nome FROM conteudo, usuario WHERE fk_cont_idUsuario = idUsuario AND titulo LIKE '%{$termoPesquisado}%';";

        try {
            $resultado = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function pesquisaDisciplina($termoPesquisado){

        $query = "SELECT DISTINCT idConteudo, titulo, fotoCapa, nome FROM conteudo, usuario, disciplina, conteudodisciplina WHERE (idConteudo = fk_cd_idConteudo AND idDisciplina = fk_cd_idDisciplina AND fk_cont_idUsuario = idUsuario) AND disciplina LIKE '%{$termoPesquisado}%';";

        try {
            $resultado = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function pesquisaTag($termoPesquisado){

        $query = "SELECT DISTINCT idConteudo, titulo, fotoCapa, nome FROM conteudo, usuario, conteudotag, tag WHERE (fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag and fk_cont_idUsuario = idUsuario) AND tag LIKE '%{$termoPesquisado}%';";

        try {
            $resultado = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function pesquisaProfessor($termoPesquisado){

        $query = "SELECT DISTINCT idConteudo, titulo, fotoCapa, nome FROM conteudo, usuario WHERE fk_cont_idUsuario = idUsuario AND nome LIKE '%{$termoPesquisado}%';";

        try {
            $resultado = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}

$pesquisa = new Pesquisa;

//$arrayin = ["termo" => "teste1"];

//$pesquisa->pesquisarTag();

