<!DOCTYPE html>
<html lang="pt-br">

<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require_once('head.php');
?>

<body>

<div class="main-content inner" id="cadastroUsuario">
        <!-- header -->
        <header>
            <div class="container-fluid">
                <!-- nav -->
                
                <?php
                    require_once('menu.php');
                ?>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
</div>