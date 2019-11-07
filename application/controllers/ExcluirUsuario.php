<?php

    require "../views/head.php";
    require "../models/Usuario.php";
    //require '../models/Professor.php';

    $usuario = new Aluno();

    class ExcluirUsuario {
        public function deletaUsuario($idUsuario,$usuario){
            $usuario->deletaUsuario($idUsuario);
            session_destroy();
            header("Location: ../index.php");
        }
    }

    $id = $_GET['idUsuario'];
    $exclusao = new ExcluirUsuario();
    $exclusao->deletaUsuario($id,$usuario);