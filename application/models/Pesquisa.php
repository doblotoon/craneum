<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "Conexao.php";
class Pesquisa {

    public $conexao;

    public function __construct(){
        $conexao_objeto = new Conexao();
        $this->conexao = $conexao_objeto->getConexao();
    }
    
    public function pesquisarTema($arrayPesquisa){
        $query = "select idConteudo,titulo from conteudo where titulo like '%{$_GET['termo']}%';";//no phpmyadmin tá dando bom
        //print_r($query);

        $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        try {
            
            $termo = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {

            echo $e->getMessage();

        }
        print('<pre>');
        print_r($termo);
    }
}

$pesquisa = new Pesquisa;

$arrayin = ["termo" => "teste1"];

$pesquisa->pesquisarTema($arrayin);

