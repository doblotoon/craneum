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
    
    if ((int) $_POST['funcao']==0) {
        $redirect = "someDuvida";
    }else{
        $redirect = "adendos";
    }

    header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']."&abre=true#{$redirect}");

