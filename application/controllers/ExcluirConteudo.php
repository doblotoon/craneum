<?php
    require "../models/Conteudo.php";

    $conteudoObj = new Conteudo();
    
    //$a = $comentario->deletarComentario($_GET['idDuvida']);

    class deletarConteudo{
        public function deleta($conteudoObj,$tipo){

            $idConteudo = (int) $_POST['idConteudo'];
            //print_r($dados);
            $conteudoObj->deletarConteudo($idConteudo);
            if ($tipo==null) {
                header("Location: ../index.php");
            }else {
                header("Location: ../views/gerenciarConteudos".$tipo.".php");
            }
        }
    }

    if (isset($_GET['tipo'])) {    
        if ($_GET['tipo']=='admin') {
            $tipo = "Admin";
        }else{
            $tipo = "";
        }   
    }else {
        $tipo = null;
    }
    $exclui = new deletarConteudo();
    $exclui->deleta($conteudoObj,$tipo);
    
   //header("Location: ../views/conteudo.php?idConteudo=".$_POST['id']);