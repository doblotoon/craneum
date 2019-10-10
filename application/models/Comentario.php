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

    public function deletarComentario($idDuvida){
        try {
            $query = "delete from duvida where idDuvida = {$idDuvida}";
            $linhas = $this->conexao->exec($query);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getComentario($idConteudo){
        $query = "select idDuvida, duvida, adendo, respondido, dataDuvida, idUsuario from usuario, duvida where fk_duv_idConteudo = {$idConteudo} and fk_duv_idUsuario = idUsuario;";
        $duvida = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $duvida;
    }

    public function editarComentario($duvidaPOST){// $_POST;
        $query = "select * from duvida where idDuvida = {$duvidaPOST['id']}";
        $ex = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $atual = $duvidaPOST['duvidaAtual'];
        $idDuvida = $duvidaPOST['id'];

        $query = "UPDATE duvida SET duvida='{$atual}' WHERE idDuvida={$idDuvida}";      
            
        if ($ex != $atual) {
            try {
                $this->conexao->exec($query);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }else{
            echo "alert('aaaaaa burrao errou tudo')";
        }

    }

    /*public function trocaIDporNome(int $idUsuario){
        $query = "SELECT nome FROM usuario WHERE idUsuario = {$idUsuario}";

        try {
            $nomeUsuario = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        return $nomeUsuario;
    }//n sei se deixo aqui ou na controller*/

}

/*$n = new Comentario;

$arrayin=[
    "duvida" =>"golpe em cima de golpe",
    "id_conteudo" => 18,
    "idUsuario" => 2
];
//var_dump($arrayin);
try {
    $a = $n->cadastrarComentario($arrayin);
} catch(PDOException $e) {
    echo $e->getMessage();
}*/

