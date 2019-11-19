<?php
    require "../models/Conteudo.php";

    $conteudoObj = new Conteudo();
    
    //$a = $comentario->deletarComentario($_GET['idDuvida']);

    class deletarConteudo{
        public function deleta($conteudoObj,$tipo){

            $idConteudo = (int) $_POST['idConteudo'];
            //print_r($dados);
            $conteudoObj->deletarConteudo($idConteudo);
            header("Location: ../views/gerenciarConteudos".$tipo.".php");
        }
    }

    if ($_GET['tipo']=='admin') {
        $tipo = "Admin";
    }else{
        $tipo = "";
    }
    $exclui = new deletarConteudo();
    $exclui->deleta($conteudoObj,$tipo);
    
   //header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']);