<?php
    require_once 'header.php';

    if(empty($_SESSION)){
        header("Location: erro.php?erro=acessoNegado");
    }
    require "../models/Usuario.php";
    
    require '../models/Conteudo.php';
    $conteudoClasse = new Conteudo();
    $conteudosSalvos = $conteudoClasse->getConteudoSalvo($_SESSION['id']);
    if ($_SESSION['tipo']!="usuario") {
        $conteudosPostados = $conteudoClasse->getConteudoPostado($_SESSION['id']);
    }
    //print_r($conteudoClasse->getConteudoSalvo($_SESSION['id']));
    //exit;
?>

    <body>
        <style>
            .escondido{
                display:none;
            }
        </style>
        <div class="espacoInferiorUsuario">.</div>

        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar espacoSuperiorSidebarUser card">

                        <!-- SIDEBAR USERPIC -->
                        <div>
                            <img src="<?=$_SESSION['fotoPerfil']?>" class="img-fluid" alt="">
                        </div>
                        <!-- END SIDEBAR USERPIC -->

                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name img-fluid">
                                <?=$_SESSION['nome']?>
                            </div>
                            <div class="profile-usertitle-job">
                                <?=$_SESSION['tipo']?>
                            </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->

                        <!-- SIDEBAR BUTTONS -->
                        <div class="profile-userbuttons">
                            <a href="<?=$caminho?>views/editarUsuario.php">
                                <button type="button" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span> Editar</button>
                            </a>
                        </div>
                        <!-- END SIDEBAR BUTTONS -->

                        <!-- SIDEBAR MENU -->
                        <div class="profile-usermenu">
                            <ul class="navUser">
                                <li class="active salvo">
                                    <a id='salvo'>
                                        <span class="fa fa-bookmark espacoIcon"></span>Conteúdos Salvos
                                    </a>
                                </li>
<?php
                        if($_SESSION['tipo']!='usuario'){
?>
                                <li class='postado'>
                                    <a id='postado'>
                                        <span class="fa fa-pencil-alt espacoIcon"></span>Conteúdos Postados
                                    </a>
                                </li>
<?php
                        } 
                        if ($_SESSION['tipo']=="professor") {                    
?>      
                                <li>
                                    <a href="gerenciarConteudos.php">
                                        <span class="fa fa-user-cog espacoIcon"></span>Gerenciar Conteúdos
                                    </a>
                                </li>
<?php
                        }

                        if($_SESSION['tipo']=='administrador'){
?>
                                <li>
                                    <a href="gerenciarConteudosAdmin.php">
                                        <span class="fa fa-user-cog espacoIcon"></span>Gerenciar Conteúdos
                                    </a>
                                </li>

                                <li>
                                    <a href="gerenciarUsuarios.php">
                                        <span class="fa fa-user-cog espacoIcon"></span>Gerenciar Usuários
                                    </a>
                                </li>

                                <li>
                                    <a href="gerenciarDisciplinas.php">
                                        <span class="fa fa-user-cog espacoIcon espacoIcon"></span>Gerenciar Disciplinas
                                    </a>
                                </li>

<?php
    }
?>
                            </ul>
                        </div>
                        <!-- END MENU -->

                    </div>
                </div>

                <div class="col-md-9">
                    <div class="profile-content">
                        <h4 class="tittle-w3layouts two text-center tituloPagUser" id='textoConteudo'>Conteúdos Salvos</h4> 
                        <div id="products" class="row view-group my-lg-5 my-4">


                        <?php
                            if (empty($conteudosSalvos)) {
                                echo "
                                <div class='item col-lg-12 mt-9 salvos'>
                                    <div class='alert alert-warning' role='alert'>
                                        <h5>Você não salvou nada ainda. Veja algum conteúdo que lhe interesse e salve.</h5>
                                    </div>
                                </div>";
                            }

                            foreach ($conteudosSalvos as $key => $conteudoSalvo) {

                                    if($key%2==0) {
                                        print('<div class="row view-group my-lg-5 my-4">');
                                    }
                        ?>  


                                <div class="item col-lg-6 mt-3 salvos">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?=$conteudoSalvo['fotoCapa']?>" alt="">
                                    </div>
                                    <div class="caption card-body cardConteudo">
                                    <!-- TÍTULO -->
                                        <a class="linkItemRecemPostado" href="conteudo.php?idConteudo=<?=$conteudoSalvo['idConteudo']?>">
                                            <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                <?=mb_strimwidth($conteudoSalvo['titulo'],0,80,"...")?>
                                            </h5>
                                        </a>
                                    <!-- PRÉVIA DO CONTEÚDO -->
                                        <p class="group inner list-group-item-text textoCardConteudo">
                                            <?=mb_strimwidth($conteudoSalvo['conteudo'],0,155,"...")?>
                                        </p>
                                        <hr>
                                        <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                        <h6 class="autorCard group card-title inner list-group-item-heading">
                                            <img class="imagemAutorCard" src="<?=$conteudoSalvo['fotoPerfil']?>">
                                            Postado por <?=mb_strimwidth($conteudoSalvo['nome'],0,12,"...")?> em <?=date("d/m/Y", strtotime($conteudoSalvo['dataPostagem']));?>
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        <?php
                                if($key == (sizeof($conteudosSalvos)-1)){
                                    print('</div>');  
                                } else {
                                    if($key%2==1 or $key==1){
                                        print('</div>');
                                    }
                                }
                            }
                        ?>



                        <!-- conteudos postados -->
                        <?php
                            if ($_SESSION['tipo']!="usuario") {
                        
                                if (empty($conteudosPostados)) {
                                    echo "
                                    <div class='item col-lg-12 postados escondido'>
                                        <div class='alert alert-info' role='alert'>
                                            <h5>Você não postou nenhum conteúdo ainda.</h5>
                                        </div>
                                    </div>";
                                }


                                foreach ($conteudosPostados as $key => $conteudoPostado) {
                                    
                                    if($key%2==0) {
                                        print('<div class="row view-group my-lg-5 my-4">');
                                    }
                        ?>  


                                    <div class="item col-lg-6 mt-3 escondido postados">
                                    <div class="thumbnail card">
                                        <div class="img-event">
                                            <img class="group list-group-image img-fluid" src="<?=$conteudoPostado['fotoCapa']?>" alt="">
                                        </div>
                                        <div class="caption card-body cardConteudo">
                                        <!-- TÍTULO -->
                                            <a class="linkItemRecemPostado" href="conteudo.php?idConteudo=<?=$conteudoPostado['idConteudo']?>">
                                                <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                    <?=mb_strimwidth($conteudoPostado['titulo'],0,80,"...")?>
                                                </h5>
                                            </a>
                                        <!-- PRÉVIA DO CONTEÚDO -->
                                            <p class="group inner list-group-item-text textoCardConteudo">
                                                <?=mb_strimwidth($conteudoPostado['conteudo'],0,155,"...")?>
                                            </p>
                                            <hr>
                                            <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                            <h6 class="autorCard group card-title inner list-group-item-heading">
                                                <img class="imagemAutorCard" src="<?=$_SESSION['fotoPerfil']?>">
                                                Postado por você em <?=date("d/m/Y", strtotime($conteudoPostado['dataPostagem']));?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                        <?php
                                
                                if($key == (sizeof($conteudosPostados)-1)){
                                    print('</div>'); 
                                    print('</div>');   
                                } else {
                                    if($key%2==1 or $key==1){
                                        print('</div>');
                                    }
                                }

                            }
                        }
                        ?>

                        </div>
                    </div>     
                </div>
            </div>
        </div>



        <script>
            $(document).ready(function(){
                $("#postado").click(function () {
                    $(".salvos").addClass("escondido");
                    $(".postados").removeClass("escondido");
                    $("#postado").parent(".postado").addClass("active");
                    $("#salvo").parent(".salvo").removeClass("active");
                    $("#textoConteudo").text("Conteúdos Postados");
                })
                $("#salvo").click(function () {
                    $(".postados").addClass("escondido");
                    $(".salvos").removeClass("escondido");
                    $("#salvo").parent(".salvo").addClass("active");
                    $("#postado").parent(".postado").removeClass("active");
                    $("#textoConteudo").text("Conteúdos Salvos");
                })
            })

        </script>
<?php
    require_once('footer.php');
?>   
    