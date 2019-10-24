<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    
    //$a = $comentario->deletarComentario($_GET['idDuvida']);

    class deletarComentario{
        public function excluidoComentario($comentarioObj){

            $dados = $_POST['idDuvida'];
            print_r($dados);
            $comentarioObj->deletarComentario($dados);
        }
    }

    $cadastro = new deletarComentario();
    $cadastro->excluidoComentario($comentarioObj);
    
   header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']);