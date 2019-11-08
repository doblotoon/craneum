<?php
    function reqURL(){
        $aux = explode("/", $_SERVER['REQUEST_URI']);
        $aux_two = explode(".", end($aux));
        $paginaAtual = $aux_two[0];
        return $paginaAtual;
    }

    $URLAtual= reqURL();
    if($URLAtual=="" or $URLAtual=="index"){
        $caminho= "";
    } else {
        $caminho= "../";
    }

    if (!isset($_SESSION)) {
        session_start();
        if (!empty($_SESSION['status']) and $_SESSION['status']==true) {
            $login = true;
            if ($_SESSION['tipo']!="administrador") {    
                $dadosJson = file_get_contents($caminho."controllers/".$_SESSION['tipo'].".json");
                $paginasNegado = json_decode($dadosJson,true);
            }
            if ($login and $URLAtual=="cadastroUsuario") {
                header("Location: erro.php?erro=jaLogadoCriar");
            }elseif ($login and $URLAtual=="login") {
                header("Location: erro.php?erro=jaLogado");
            }
        }else{
            $login = false;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Craneum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <!-- Custom Theme files -->
        <link href="<?=$caminho?>assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/style.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/augusto.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/guardini.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/victor.css" type="text/css" rel="stylesheet" media="all">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- font-awesome icons -->
        <link href="<?=$caminho?>assets/fontawesome/css/all.min.css" rel="stylesheet">
        <!-- //Custom Theme files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- //online-fonts -->
        <link rel="shortcut icon" type="image/png" href="<?=$caminho?>assets/images/au.png"/> <!-- TODO: Buscar uma forma de fazer com que o favicon funcione nas demais páginas, não apenas na index --> 
        <script src='<?=$caminho?>assets/js/jquery.js'></script>
        <script src='<?=$caminho?>assets/bootstrap/js/bootstrap.min.js'></script>
        <script>
            
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    </head>