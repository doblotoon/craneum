<?php
    require_once('header.php');
    require_once('../models/Conteudo.php');

    $conteudo= new Conteudo();
    $conteudos= $conteudo->getConteudosRecentes();

    $count=0;
    foreach ($conteudos as $key => $conteudo) {
        if($count < 9) {
            $maisRecentes[] = $conteudo;
        }

        $count++;

    }

 
?>
    <body>
        <section class="ab-info-main py-5">
            <div class="container py-md-4">
                <h3 class="tittle-w3layouts two text-center">Recentemente Postados</h3>
                <div id="products">
    
<?php
        for ($i=0; $i < 9; $i++) { 
            if($i%3==0) {
                print('<div class="row view-group my-lg-5 my-4">');
            }
?>
                    <div class="item col-lg-4 mt-3">    
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="<?=$maisRecentes[$i]['fotoCapa']?>">
                            </div>

                            <div class="caption card-body cardConteudo">
                            <!-- TÍTULO -->
                                <a class="linkItemRecemPostado" href="conteudo.php?idConteudo=<?=$maisRecentes[$i]['idConteudo']?>">
                                    <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                        <?=mb_strimwidth($maisRecentes[$i]['titulo'],0,80,"...")?>
                                    </h5>
                                </a>

                            <!-- PRÉVIA DO CONTEÚDO -->
                                <p class="group inner list-group-item-text textoCardConteudo">
                                        <?=mb_strimwidth($maisRecentes[$i]['conteudo'],0,155,"...")?>
                                </p>
                                <hr>

                                <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                <h6 class="autorCard group card-title inner list-group-item-heading">
                                    <img class="imagemAutorCard" src="<?=$maisRecentes[$i]['fotoPerfil']?>">Postado por <?=$maisRecentes[$i]['nome']?> em <?=date("d/m/Y", strtotime($maisRecentes[$i]['dataPostagem']));?>
                                </h6>
                            </div>
                        </div>
                    </div>
<?php
            if($i==2 or $i==5 or $i==8){
                print('</div>');
            }
        }
?>
                        </div> <!-- FECHA ROW -->
                    </div> <!-- FECHA ROW -->
                </div> <!-- FECHA PRODUCTS -->
            </div> <!-- FECHA CONTAINER -->
        </section>
<?php
    require_once('footer.php');
?>
