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
    public function pesquisarTema(){ // get: termo = valor da pesquisa
        $query = "select distinct idConteudo,titulo,fotoCapa,nome, disciplina from conteudo,usuario, conteudodisciplina, disciplina where titulo like '%{$_GET['termo']}%' and fk_cont_idUsuario = idUsuario and fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = idConteudo;";//no phpmyadmin tá dando bom
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

    public function pesquisarDisciplina(){
        $query = "select disciplina from disciplina where disciplina like '%{$_GET['termo']}%';";
        //select titulo from conteudo, conteudodisciplina, disciplina where disciplina like '%fundamentos%' and idConteudo = fk_cd_idConteudo and idDisciplina = fk_cd_idDisciplina
        //consulta pra terminar amanha ^^^
        
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

    public function pesquisarTag(){
        $query = "select distinct titulo, idConteudo, titulo, fotoCapa, disciplina from conteudo, conteudotag, tag, disciplina, usuario, conteudodisciplina where idConteudo = fk_ct_idConteudo and idTag = fk_ct_idTag and tag like '%{$_GET['termo']}%' and fk_cont_idUsuario = idUsuario and fk_cd_idDisciplina = idDisciplina and fk_cd_idConteudo = idConteudo;";
    

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
}

$pesquisa = new Pesquisa;

//$arrayin = ["termo" => "teste1"];

$pesquisa->pesquisarTag();

