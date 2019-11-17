<?php

    require "../models/Usuario.php";

    $usuarioClasse = new Aluno();

    class MudaTipo{
        public function mudaTipoUsuario($idUsuario,$tipoMudanca,$usuarioClasse){
            
            $usuarioClasse->mudaTipoUsuario((int)$idUsuario,$tipoMudanca);
            header("Location: ../views/gerenciarUsuarios.php");
        }
    }

    $idUsuario = $_POST['idUsuario'];
    $tipoMudanca = $_POST['tipoMudanca'];

    $muda = new MudaTipo();
    
    $muda->mudaTipoUsuario($idUsuario,$tipoMudanca,$usuarioClasse);