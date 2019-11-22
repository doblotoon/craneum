<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    
    //$a = $comentario->deletarComentario($_GET['idDuvida']);

    class deletarResposta{
        public function excluidaResposta($comentarioObj){

            $dados = $_POST['idResposta'];
            //print_r($dados);
            $comentarioObj->deletarResposta($dados);
        }
    }

    $cadastro = new deletarResposta();
    $cadastro->excluidaResposta($comentarioObj);
    
   header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']."&abre=true#someDuvida");