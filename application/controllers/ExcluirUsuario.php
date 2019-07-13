<?php
require "../models/Aluno.php";
require '../models/Professor.php';
    $usuario = new Aluno();

    class ExcluirUsuario {
        public function ExcluirUsuario($idUsuario){
            $this->$usuario->ExcluirUsuario($idUsuario);
        }
    }

    $exclusao = new ExcluirUsuario();
    $exclusao->ExcluirUsuario($_SESSION['id']);