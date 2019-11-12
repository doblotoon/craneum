<?php
    require_once('header.php');
    require_once('../models/Conteudo.php');

    $conteudo= new Conteudo();
    $conteudos= $conteudo->getConteudosRecentes();

    print_r($conteudos);
?>
    <body>
        <section class="ab-info-main py-5">
            <div class="container py-md-4">
                <h3 class="tittle-w3layouts two text-center">Recentemente Postados</h3>
                <div id="products">    
                    <div class="row view-group my-lg-5 my-4">

                        <div class="item col-lg-4 mt-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                </div>
                                <div class="caption card-body cardConteudo">

                                    <!-- TÍTULO -->
                                    <a class="linkItemRecemPostado" href="">
                                        <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                            Programming
                                        </h5>
                                    </a>

                                    <!-- PRÉVIA DO CONTEÚDO -->
                                    <p class="group inner list-group-item-text textoCardConteudo">
                                        Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                    </p>

                                    <hr>

                                    <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                    <h6 class="autorCard group card-title inner list-group-item-heading">
                                        <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item col-lg-4 mt-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                </div>
                                <div class="caption card-body cardConteudo">

                                    <!-- TÍTULO -->
                                    <a class="linkItemRecemPostado" href="">
                                        <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                            Programming
                                        </h5>
                                    </a>

                                    <!-- PRÉVIA DO CONTEÚDO -->
                                    <p class="group inner list-group-item-text textoCardConteudo">
                                        Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                    </p>

                                    <hr>

                                    <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                    <h6 class="autorCard group card-title inner list-group-item-heading">
                                        <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="item col-lg-4 mt-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                </div>
                                <div class="caption card-body cardConteudo">

                                    <!-- TÍTULO -->
                                    <a class="linkItemRecemPostado" href="">
                                        <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                            Programming
                                        </h5>
                                    </a>

                                    <!-- PRÉVIA DO CONTEÚDO -->
                                    <p class="group inner list-group-item-text textoCardConteudo">
                                        Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                    </p>

                                    <hr>

                                    <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                    <h6 class="autorCard group card-title inner list-group-item-heading">
                                        <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="row view-group my-lg-5 my-4">

                            <div class="item col-lg-4 mt-3">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                    </div>
                                    <div class="caption card-body cardConteudo">

                                        <!-- TÍTULO -->
                                        <a class="linkItemRecemPostado" href="">
                                            <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                Programming
                                            </h5>
                                        </a>

                                        <!-- PRÉVIA DO CONTEÚDO -->
                                        <p class="group inner list-group-item-text textoCardConteudo">
                                            Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                        </p>

                                        <hr>

                                        <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                        <h6 class="autorCard group card-title inner list-group-item-heading">
                                            <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                        </h6>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="item col-lg-4 mt-3">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                    </div>
                                    <div class="caption card-body cardConteudo">

                                        <!-- TÍTULO -->
                                        <a class="linkItemRecemPostado" href="">
                                            <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                Programming
                                            </h5>
                                        </a>

                                        <!-- PRÉVIA DO CONTEÚDO -->
                                        <p class="group inner list-group-item-text textoCardConteudo">
                                            Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                        </p>

                                        <hr>

                                        <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                        <h6 class="autorCard group card-title inner list-group-item-heading">
                                            <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                        </h6>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="item col-lg-4 mt-3">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?=$caminho?>assets/images/g1.jpg" alt="">
                                    </div>
                                    <div class="caption card-body cardConteudo">

                                        <!-- TÍTULO -->
                                        <a class="linkItemRecemPostado" href="">
                                            <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                Programming
                                            </h5>
                                        </a>

                                        <!-- PRÉVIA DO CONTEÚDO -->
                                        <p class="group inner list-group-item-text textoCardConteudo">
                                            Lorem ipsum dolor sit amet consectetuer, consectetuer adipiscing elit sit
                                        </p>

                                        <hr>

                                        <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                        <h6 class="autorCard group card-title inner list-group-item-heading">
                                            <img class="imagemAutorCard" src="../assets/images/c1.jpg">Postado por Zé em 25/12/2018
                                        </h6>
                                            
                                    </div>
                                </div>
                            </div>
                        </div> <!-- FECHA ROW -->
                    </div> <!-- FECHA ROW -->
                </div> <!-- FECHA PRODUCTS -->
            </div> <!-- FECHA CONTAINER -->
        </section>
<?php
    require_once('footer.php');
?>
