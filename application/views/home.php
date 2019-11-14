<?php
    require_once 'head.php';
    PRINT($caminho);
    require_once $caminho."models/Conteudo.php";
    $conteudo= new Conteudo();
    $conteudos= $conteudo->getConteudosRecentes();
    
    $count=0;
    foreach ($conteudos as $key => $conteudo) {
        if($count < 3) {
            $tresRecentes[] = $conteudo;
        }

        $count++;

    }

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
                </div>
            </header>
        <!-- // Cabeçalho -->

        <!-- Parte Central -->
            <div class="banner-content-w3pvt">
                <div class="banner-w3layouts-info text-center">
                    <h3>Pesquise um tema, professor, disciplina ou tag</h3>
                    <form class="banner-form" method="get" action="resultadoPesquisa.php">
                        <input type="text" class="form-control"  placeholder="Ex: Revolução Francesa" name="termo"  required="">
                        <button type="submit" class="btn btn-default">Pesquisar</button>
                    </form>
                </div>
            </div>
        <!-- // Parte Central -->
        </div>

        <!-- // Recentemente Postados -->
        <section class="ab-info-main py-5">
            <div class="container py-md-4">
                <h3 class="tittle-w3layouts two text-center">Recentemente Postados <a href="recentementePostados.php"><button type="button" class="btn botaoMaisHome">+ Ver Mais</button></a></h3>
                <div id="products" class="row view-group my-lg-5 my-4">
<?php
                foreach ($tresRecentes as $conteudoRecente) {
                    if ($URLAtual== "") {
                        $fotoCapa = substr($conteudoRecente['fotoCapa'],3);
                        $caminhoLink = "views/";
                        $fotoPerfil = substr($conteudoRecente['fotoPerfil'],3);
                    }else{
                        $caminhoLink = '';
                    }
?>
                    <div class="item col-lg-4 mt-3">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="<?=$fotoCapa?>">
                            </div>

                            <div class="caption card-body cardConteudo">
                            <!-- TÍTULO -->
                                <a class="linkItemRecemPostado" href="<?=$caminhoLink?>conteudo.php?idConteudo=<?=$conteudoRecente['idConteudo']?>">
                                    <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                        <?=mb_strimwidth($conteudoRecente['titulo'],0,80,"...")?>
                                    </h5>
                                </a>

                            <!-- PRÉVIA DO CONTEÚDO -->
                                <p class="group inner list-group-item-text textoCardConteudo">
                                        <?=mb_strimwidth($conteudoRecente['conteudo'],0,120,"...")?>
                                </p>
                                <hr>

                                <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                <h6 class="autorCard group card-title inner list-group-item-heading">
                                    <img class="imagemAutorCard" src="<?=$fotoPerfil?>">Postado por <?=$conteudoRecente['nome']?> em <?=date("d/m/Y", strtotime($conteudoRecente['dataPostagem']));?>
                                </h6>
                            </div>
                        </div>
                    </div>
<?php
                }
?>
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
<?php
    if(empty($_SESSION)){
?>
        <!--/ Participe -->
        <section class="last-content text py-5">
            <div class="container py-md-3 text-center">
                <div class="last-w3pvt-inner-content px-lg-5">
                    <h3 class="mb-4 tittle-w3layouts">Participe Dessa <span>Comunidade</span>!</h3>
                    <p class="px-lg-5">Se inscrevendo você pode comentar suas dúvidas e salvar conteúdos para ler depois.</p>
                    <div class="buttons mt-md-4 mt-3">
                        <a href="cadastroUsuario.php" class="btn btn-default btnIndex">Participar</a>
                        <a href="login.php" class="btn btn1 btnIndex"> Entrar </a>
                    </div>
                </div>
            </div>
        </section>
    <!--// Participe -->
    
<?php
    }
?>
    <!-- footer -->
<?php
    require_once 'footer.php';
?>
    <!-- //footer -->