<?php
    require_once 'head.php';
    
    //$caminhos = explode("\\",__DIR__);
    //print_r($caminhos);
?>

<body>
    <!-- main -->
    <div class="main-content" id="home">
        <!-- Cabeçalho -->
        <header>
            <div class="container-fluid">
                <!-- Menu -->
                <?php
                    require_once 'menu.php';
                ?>
                <!-- // Menu -->
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
    require_once 'footer.php';
?>
    <!-- //footer -->
</body>

</html>
