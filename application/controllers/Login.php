<?php
    require "../views/head.php";
    require_once "../models/Usuario.php";
    //print_r($_GET);
    
    if (isset($_GET['conteudo']) and !empty($_GET['conteudo'])) {
        $pagRedirect = 'Location: ../views/conteudo.php?idConteudo='.$_GET['conteudo'];
        $conteudo = true;
    }else{
        $conteudo = false;
        $pagRedirect = "Location: ../index.php";
    }
    $testes=['conteudo'=>$conteudo,'redirect'=>$pagRedirect];
    $log = $_GET['log'];
    $check = $_GET['check'];
    $dados_enviados = $_POST;
    function login($dados_enviados,$testes){
        $usuario = new Aluno;
        $email = $dados_enviados['email'];
        $senha = $dados_enviados['senha'];
        $login = $usuario->logar($email,$senha);
        $conteudo = $testes['conteudo'];
        $pagRedirect = $testes['redirect'];
        switch ($login) {
            case 'sucesso':
                $dadosUsuario = $usuario->getUsuario();
                if (!isset($_SESSION)) {
                    session_start();
                }
                $_SESSION = $dadosUsuario;
                $_SESSION['status'] = true;
                $_SESSION['tipo'] = $usuario->getTipoUsuario($_SESSION['id']);
                //echo "FOI";
                //echo "<script>alert($conteudo)/script>";
                if ($conteudo) {
                    header($pagRedirect);
                }else{
                    header($pagRedirect);
                }
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
        login($dados_enviados,$testes);
    }elseif ($log=="out" and $check==true) { 
        logout();
        header("Location: ../index.php");
    }
    exit;