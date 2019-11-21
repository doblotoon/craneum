<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "Conexao.php";
class Pesquisa {

    public $conexao;

    public function __construct(){
        $conexao_objeto = new Conexao();
        $this->conexao = $conexao_objeto->getConexao();
    }
    //%{$_GET['termo']}%
    public function pesquisarTema($termoPesquisado){ // get: termo = valor da pesquisa
        $query = "select idConteudo,titulo,fotoCapa,nome, disciplina from conteudo,usuario, conteudodisciplina, disciplina where titulo like '%{$termoPesquisado}%' and fk_cont_idUsuario = idUsuario and fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = idConteudo;";//no phpmyadmin tá dando bom
        //print_r($query);

        $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        try {
            
            $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo $e->getMessage();

        }
        //print('<pre>');
        //print_r($termo);
        return $termo;
    }

    public function pesquisarDisciplina($termoPesquisado){
        $query = "select titulo, idConteudo, fotoCapa, disciplina, nome from conteudo, conteudodisciplina, disciplina, usuario where disciplina like '%{$termoPesquisado}%' and idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and idUsuario = fk_cont_idUsuario;";
        //select titulo from conteudo, conteudodisciplina, disciplina where disciplina like '%fundamentos%' and idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina
        
        $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        try {
            
            $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo $e->getMessage();

        }
        //print('<pre>');
        //print_r($termo);
        return $termo;
    }

    public function pesquisarTag($termoPesquisado){
        $query = "select titulo, idConteudo, titulo, fotoCapa, nome from conteudo, conteudotag, tag, usuario where idConteudo = fk_ct_idConteudo and idTag = fk_ct_idTag and tag like '%{$termoPesquisado}%' and fk_cont_idUsuario = idUsuario and idUsuario = fk_cont_idUsuario";

        $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            try {

                $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            } catch (PDOException $e) {

                echo $e->getMessage();

            }
            //print('<pre>');
            //print_r($termo);
            return $termo;
        
    }

    public function disciplinaConteudoPesquisa($idConteudo){
        $query = "select disciplina from disciplina,conteudodisciplina where fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = {$idConteudo};";
            
            $disciplinasConteudoPesquisa = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

            return $disciplinasConteudoPesquisa;
    }
    public function pesquisaGeral($termoPesquisado){
        
        $query = "select distinct idConteudo, titulo,fotoCapa from conteudo,conteudodisciplina,disciplina,conteudotag,tag where (idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina and fk_ct_idConteudo = idConteudo and fk_ct_idTag = idTag) and (disciplina like '%{$termoPesquisado}%' or titulo like '%{$termoPesquisado}%' or tag like '%{$termoPesquisado}%');";

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

