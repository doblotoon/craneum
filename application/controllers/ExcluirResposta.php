<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    
    //$a = $comentario->deletarComentario($_GET['idDuvida']);

    class deletarResposta{
        public function excluidaResposta($comentarioObj){

            $idResposta = $_POST['idResposta'];
            $idDuvida = $_POST['idDuvida'];
            //print_r($dados);
            //echo $idDuvida;
            $comentarioObj->deletarResposta($idResposta,$idDuvida);
            //$comentarioObj->mudaRespondido($idDuvida);
        }
    }

    $cadastro = new deletarResposta();
    $cadastro->excluidaResposta($comentarioObj);
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']."&abre=true#someDuvida");