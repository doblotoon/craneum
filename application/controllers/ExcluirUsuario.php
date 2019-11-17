<?php

    require "../views/head.php";
    require "../models/Usuario.php";
    //require '../models/Professor.php';

    $usuario = new Aluno();

    class ExcluirUsuario {
        public function deletaUsuario($idUsuario,$usuario,$redirect){
            $usuario->deletaUsuario($idUsuario);
            if ($_SESSION['id']==$idUsuario) {
                
                session_destroy();
            }
            //echo $redirect;
            header("Location: {$redirect}");
        }
    }

    if (isset($_POST['idUsuario'])) {
        $id = $_POST['idUsuario'];
        $redirect = "../views/gerenciarUsuarios.php";
        echo "<script> alert('a')</script>";
    }else{
        $id = $_GET['idUsuario'];
        $redirect = "../index.php";
    }
    $exclusao = new ExcluirUsuario();
    $exclusao->deletaUsuario($id,$usuario,$redirect);