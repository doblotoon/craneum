<?php
    require "../models/Comentario.php";

    $comentarioObj = new Comentario();
    

    class editarResposta{
        public function editadaResposta($comentarioObj){

            $dados = $_POST;
            $comentarioObj->editarResposta($dados);
        }
    }

    $cadastro = new editarResposta();
    $cadastro->editadaResposta($comentarioObj);
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']."&abre=true#someDuvida");

