<?php
    function reqURL(){
        $aux = explode("/", $_SERVER['REQUEST_URI']);
        $aux_two = explode(".", end($aux));
        $paginaAtual = $aux_two[0];
        return $paginaAtual;
    }

    $URLAtual= reqURL();
    if($URLAtual==""){
        $caminho= "";
    } else {
        $caminho= "../";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Craneum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <!-- Custom Theme files -->
        <link href="<?=$caminho?>assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/style.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?=$caminho?>assets/css/augusto.css" type="text/css" rel="stylesheet" media="all">
        <!-- font-awesome icons -->
        <link href="<?=$caminho?>assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- //Custom Theme files -->
        <!-- online-fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
        <!-- //online-fonts -->
        <link rel="shortcut icon" href="<?=$caminho?>assets/images/fav.png" /> <!-- TODO: Buscar uma forma de fazer com que o favicon funcione nas demais páginas, não apenas na index --> 
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
    </head>