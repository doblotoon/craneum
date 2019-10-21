<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();

    class cadastrarComentario{
        public function cadastroComentario($comentarioObj){
            $dados = $_POST;
            $comentarioObj->cadastrarComentario($dados);
        }
    }

    $cadastro = new cadastrarComentario();
    $cadastro->cadastroComentario($comentarioObj);
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['idConteudo']);

