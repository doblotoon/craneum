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
        $idConteudo = (int)$dadosRecebidos['idConteudo'];
        $idUsuario = (int)$dadosRecebidos['idUsuario'];
        
        try {
            $query = "insert into duvida (duvida,adendo,respondido,dataDuvida,fk_duv_idConteudo,fk_duv_idUsuario) values ('{$duvida}',0,0,'{$dataDuvida}', {$idConteudo} ,{$idUsuario});"; 
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
        $query = "select idDuvida, duvida, adendo, respondido, dataDuvida, idUsuario, nome, fotoPerfil from usuario, duvida where fk_duv_idConteudo = {$idConteudo} and fk_duv_idUsuario = idUsuario;";
        $duvida = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $duvida;
    }

    public function editarComentario($duvidaPOST){// $_POST;
        // precisa da duvida atual e da idDuvida da comentario
        $query = "select * from duvida where idDuvida = {$duvidaPOST['id']}";
        $ex = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $atual = $duvidaPOST['duvidaAtual'];
        $idDuvida = $duvidaPOST['idDuvida'];

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

    public function adendo($dados){
        $idDuvida = (int)$dados['idDuvida'];
        $funcao = (int)$dados['funcao'];

        $query = "UPDATE duvida SET adendo={$funcao} where idDuvida={$idDuvida} ";

        try {
            $this->conexao->exec($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function trocaIDporNome(int $idUsuario){
        $query = "SELECT nome from usuario, duvida where fk_duv_idUsuario = {$idUsuario};";// dx isso bx filhote

        try {
            $nomeUsuario = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        return $nomeUsuario;
    }

    public function getResposta(){
        $query = "select * from resposta;";
        $duvida = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);

        return $duvida;
    }

    public function cadastrarResposta($poste){
        $query = "INSERT INTO resposta(resposta, fk_resp_idDuvida) VALUES ('{$poste['resposta']}',{$poste['idDuvida']});";

        try {
            $this->conexao->exec($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletarResposta($idDuvida){
        $query = "delete from resposta where idResposta = {$idDuvida}";

        try {
            $this->conexao->exec($query);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function editarResposta($resPOST){

        $query = "select * from resposta where idResposta = {$resPOST['idResposta']}";
        $ex = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
        $atual = $resPOST['respostaAtual'];
        $idResposta = $resPOST['idResposta'];

        $query = "UPDATE resposta SET resposta='{$atual}' WHERE idResposta={$idResposta}";      
            
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

}
/*
$n = new Comentario;

$arrayin=[
    "idDuvida" =>18,
    "resposta" => 'risos'
];
//echo "<pre>";
   //print_r($arrayin);

    //$n->editarResposta($arrayin);
    $n->cadastrarResposta($arrayin);
    $resp = $n->getResposta();
    print_r($resp);
*/