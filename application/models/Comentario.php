<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "Conexao.php";
class Comentario {

    public $conexao;

    public function __construct(){
        $conexao_objeto = new Conexao();
        $this->conexao = $conexao_objeto->getConexao();
    }
    
    public function cadastrarComentario($dadosRecebidos){

        $duvida = $dadosRecebidos['duvida'];
        $dataDuvida = date("Y-m-d H:i:s");
        $idConteudo = $dadosRecebidos['idConteudo'];
        $idUsuario = $dadosRecebidos['idUsuario'];
        $query = "insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values ('{$duvida}',0,0,'{$dataDuvida}', {$idConteudo} ,{$idUsuario});";    
        
        try {
            $this->conexao->exec($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function editarComentario($comentario){
        
    }

    public function deletarComentario($comentario){
        
    }

    public function getComentario($idConteudo){
        $query = "select * from duvida where fk_duv_idConteudo = {$idConteudo}";
        $duvida = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $duvida;
    }
}
$n = new Comentario;

$arrayin=[
    'duvida'=>"pq lalaland é tão bom?",
    'idConteudo'=> 8,
    'idUsuario'=>2017312535
];

$a = $n->cadastrarComentario($arrayin);