<?php
    require "../views/head.php";
    require_once "../models/Aluno.php";
    $log = $_GET['log'];
    $check = $_GET['check'];
    $dados_enviados = $_POST;
    function login($dados_enviados){
        $usuario = new Aluno;
        $email = $dados_enviados['email'];
        $senha = $dados_enviados['senha'];
        $login = $usuario->logar($email,$senha);
        switch ($login) {
            case 'sucesso':
                $dadosUsuario = $usuario->getUsuario();
                session_start();
                $_SESSION = $dadosUsuario;
                $_SESSION['status'] = true;
                //echo "FOI";
                header('Location: ../index.php');
                break;
            case 'err1':
                header('Location: ../views/login.php?err=1');
                break;
            case 'err2':
                header('Location: ../views/login.php?err=2');
                break;
            
            default:
                # code...
                break;
        }
    }

    function logout(){
        session_destroy();
    }

    if ($log=="in" and $check) {
        login($dados_enviados);
    }elseif ($log=="out" and $check==true) { 
        logout();
        header("Location: ../index.php");
    }