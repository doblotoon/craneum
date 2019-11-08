<?php
        require 'head.php';

        
?>

    <body>

        <div class="main-content inner" id="cadastroUsuario">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <!-- nav -->  
                    <?php
                        require_once 'menu.php';
                    ?>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
        </div>

<?php

    if (isset($paginasNegado)) {
        if (in_array($URLAtual,$paginasNegado) and $login) {
            //header("Location: ".$caminho."erro.php?erro={$_SESSION['tipo']}");
            echo "
                <br>
                <div class='container'>
                    <div class='alert alert-warning' role='alert'>
                        ACESSO NEGADO!!! Porque você é <strong>{$_SESSION['tipo']}</strong>. Para voltar a home <a href='{$caminho}index.php' class='alert-link'>clique aqui</a>.
                    </div>
                </div>";
            exit();
        }elseif (in_array($URLAtual, $paginasNegado) and !$login) {
            echo "
                <br>
                <div class='container'>
                    <div class='alert alert-warning' role='alert'>
                        ACESSO NEGADO!!! Porque você não está logado. Para logar <a href='{$caminho}views/login.php' class='alert-link'>clique aqui</a>.
                    </div>
                </div>";
            exit();
        }
    }
?>