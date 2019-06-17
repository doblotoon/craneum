<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Craneum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="assets/bootstrap-4.3.1-dist\css\bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="assets/css/augusto.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //online-fonts -->
    <link rel="shortcut icon" href="../../craneum/assets/images/fav.png" />
</head>

<body>
    <!-- main -->
    <div class="main-content" id="home">
        <!-- Cabeçalho -->
        <header>
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                    <div id="logo">
                        <h1><a href="index.html">Craneum</a></h1>
                    </div>
                    <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-lg-3 ml-auto">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></span>
                            </label>
                            <h6 class="linkEntrarMenu">Entrar <span class="fa fa-angle-down" aria-hidden="true"></span></h6>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="" class="drop-text">Login</a></li>
                                <li><a href="index.php/CadastroUsuario" class="drop-text">Registrar-se</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- // Menu -->
            </div>
        </header>
        <!-- // Cabeçalho -->

        <!-- Parte Central -->
        <div class="banner-content-w3pvt">
            <div class="banner-w3layouts-info text-center">
                <h3>Pesquise um tema, professor, disciplina ou tag</h3>
                <form class="banner-form" method="post" action="#">
                    <input type="text" class="form-control"  placeholder="Ex: Revolução Francesa"  required="">
                    <button type="submit" class="btn btn-default">Pesquisar</button>
                </form>
            </div>
        </div>
        <!-- // Parte Central -->

    </div>

    <!-- // Recentemente Postados -->
    <section class="ab-info-main py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Recentemente Postados</h3>
            <div id="products" class="row view-group my-lg-5 my-4">
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="assets/images/g1.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <a class="linkItemRecemPostado" href=""><h4 class="group card-title inner list-group-item-heading">
                                Programming</h4>
                            </a>
                            <p class="group inner list-group-item-text">
                                Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="assets/images/g2.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <a class="linkItemRecemPostado" href=""><h4 class="group card-title inner list-group-item-heading">
                                Art &amp; Design</h4>
                            </a>
                            <p class="group inner list-group-item-text">
                                Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit</p>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 mt-3">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="assets/images/g3.jpg" alt="">
                        </div>
                        <div class="caption card-body">
                            <a class="linkItemRecemPostado" href=""><h4 class="group card-title inner list-group-item-heading">
                                Languages</h4>
                            </a>
                            <p class="group inner list-group-item-text">
                                Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row text-center mt-lg-5 mt-4 pt-5" id="stats">
                <div class="col-sm-4">
                    <div class="counter">
                        <h3 class="count-title">X</h3>
                        <p class="count-text ">Conteúdos Postados</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter two">
                        <h3 class="count-title">X</h3>
                        <p class="count-text ">Dúvidas Postadas</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="counter">
                        <h3 class="count-title">X</h3>
                        <p class="count-text ">Conteúdos Salvos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//-->

    <!--/ Participe -->
    <section class="last-content text py-5">
        <div class="container py-md-3 text-center">
            <div class="last-w3pvt-inner-content px-lg-5">
                <h3 class="mb-4 tittle-w3layouts">Participe Dessa <span>Comunidade</span>!</h3>
                <p class="px-lg-5">Se inscrevendo você pode comentar suas dúvidas e salvar conteúdos para ler depois.</p>
                <div class="buttons mt-md-4 mt-3">
                    <a href="apply.html" class="btn btn-default btnIndex">Participar</a>
                    <a href="apply.html" class="btn btn1 btnIndex"> Entrar </a>
                </div>
            </div>
        </div>
    </section>
    <!--// Participe -->
    
    <!-- footer -->
<?php
    require_once('segmentos/footer.php');
?>
    <!-- //footer -->
</body>

</html>
