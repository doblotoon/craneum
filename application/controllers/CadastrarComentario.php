<?php
require "../models/Comentario.php";

 $comentario = new Comentario;
print_r($_POST);
class CadastrarComentario{

    public function cadastrarComentario($comentario){
        $dados = $_POST;

        $comentario->cadastrarComentario($dados);
    }
}

$cadastro = new cadastrarComentario;
$cadastro->cadastrarComentario($usuario);