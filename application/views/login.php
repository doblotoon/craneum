<?php
    require_once 'header.php';

    if(!empty($_SESSION)){
        header("Location: erro.php?erro=jaCadastrado");
    } else {

        if (isset($_GET['err'])) {
            switch ($_GET['err']) {
                case '1':
                    echo "erro o email";
                    //exibir um modal dizendo o que a pessoa errou
                    break;
                case '2':
                    echo "erro a senha";
                    //exibir um modal dizendo o que a pessoa errou
                    break;
            }
        }

        if (isset($_GET['conteudo'])) {
            $conteudoPagina = "&conteudo=".$_GET['conteudo'];
        } else {
            $conteudoPagina = "";
        }
    //session_destroy();
?>

        <body>
            <section class="banner-bottom py-5">
                <div class="container py-md-4">
                    <h3 class="tittle-w3layouts two text-center" id="espacoInferiorLogin">Login</h3>
                    <div class="comment-top mt-6 row">
                        <div class="col-lg-1 comment-bottom"></div>
                        <div class="col-lg-4 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="../assets/images/login.png" alt="">
                        </div>
                        <div class="col-lg-1 comment-bottom"></div>
                        <div class="col-lg-6 comment-bottom w3pvt_mail_grid_right">
                            <form action="../controllers/Login.php?log=in&check=true<?=$conteudoPagina?>" method="post">
                                <div class="row">
                                    <div class="col-lg-9 form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" placeholder="" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-9 form-group">
                                        <label>Senha</label>
                                        <input class="form-control" type="password" name="senha" placeholder="" required="">
                                    </div>
                                </div>
                                <button type="submit" class="btn submit mt-3">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <!-- //banner-bottom -->
        <!-- footer -->
<?php
        require_once 'footer.php';
    }
?>  