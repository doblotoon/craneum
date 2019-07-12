<?php
    require_once "../models/Aluno.php";
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
                //print_r($dadosUsuario);
                //echo "FOI";
                header('Location: ../../index.php');
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
    login($dados_enviados);