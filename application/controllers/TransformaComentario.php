<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    

    class adendo{
        public function transformaComentario($comentarioObj){

            $dados = $_POST;
            $comentarioObj->adendo($dados);
        }
    }

    $cadastro = new adendo();
    $cadastro->transformaComentario($comentarioObj);
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']);

