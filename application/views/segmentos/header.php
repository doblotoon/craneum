<?php
    
    if (!isset($_SESSION)) {
        session_start();
        if (!empty($_SESSION['status']) and $_SESSION['status']==true) {
            echo 'ta logado';
        }else{
            echo 'nao ta logado';
        }
    }
    require_once 'head.php';
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