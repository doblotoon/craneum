<?php
    if($URLAtual!='conteudo'){
?>
    <footer class="footer-content text-center py-5">
<?php 
    } else {
?>
    <footer class="footer-content text-center py-5 footerConteudo">
<?php } ?>

            <div class="container py-md-3">

                <!-- logo -->
                <h2 class="logo2 text-center">
                    <a href="index.html">
                        Craneum
                    </a>
                </h2>
                <!-- //logo -->

                <!-- copyright -->
                <div class="w3layouts-copy text-center">
                    <p class="text-da">© 2019 Craneum. All rights reserved</p>
                </div>
                <!-- //copyright -->

                <!-- move top icon -->
                <div class="move-top text-center mt-3">
                    <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
                </div>
                <!-- //move top icon -->

            </div>
        </footer>

<?php
    if($URLAtual=='editarUsuario'){
        echo '<script src="'.$caminho.'assets/js/editar.js"></script>';
    }
?>
        <script src="<?=$caminho?>assets/js/menu.js"></script>
<?php
    if($URLAtual!='conteudo'){
        echo '</body>
              </html>';
    }
?>

    

