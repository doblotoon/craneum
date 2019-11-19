<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    

    class editarComentario{
        public function editadoComentario($comentarioObj){

            $dados = $_POST;
            $comentarioObj->editarComentario($dados);
        }
    }

    $cadastro = new editarComentario();
    $cadastro->editadoComentario($comentarioObj);
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']."&abre=true#someDuvida");

