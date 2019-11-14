<?php
    require_once 'header.php';

    if(empty($_SESSION)){
        header("Location: erro.php?erro=acessoNegado");
    }
    require "../models/Usuario.php";
    
    require '../models/Conteudo.php';
    $conteudoClasse = new Conteudo();
    $conteudosSalvos = $conteudoClasse->getConteudoSalvo($_SESSION['id']);
    //print_r($conteudoClasse->getConteudoSalvo($_SESSION['id']));
    //exit;
?>

    <body>
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
                                <li class="active">
                                    <a href="#">
                                        <span class="fa fa-bookmark espacoIcon"></span>Conteúdos Salvos
                                    </a>
                                </li>
<?php
                        if($_SESSION['tipo']!='usuario'){
?>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-pencil-alt espacoIcon"></span>Conteúdos Postados
                                    </a>
                                </li>
<?php
                        } if($_SESSION['tipo']=='administrador'){
?>
                                <li>
                                    <a href="gerenciarUsuarios.php">
                                        <span class="fa fa-user-cog espacoIcon"></span>Gerenciar Usuários
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <span class="fa fa-user-cog espacoIcon"></span>Gerenciar Conteúdos
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
                        <h4 class="tittle-w3layouts two text-center tituloPagUser">Conteúdos Salvos</h4> 
                        <div id="products" class="row view-group my-lg-5 my-4">


                        <?php
                            $cont = 0;
                            foreach ($conteudosSalvos as $key => $conteudoSalvo) {
                        ?>  


                                <div class="item col-lg-6 mt-3">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="<?=$conteudoSalvo['fotoCapa']?>" alt="">
                                    </div>
                                    <div class="caption card-body cardConteudo">
                                    <!-- TÍTULO -->
                                        <a class="linkItemRecemPostado" href="conteudo.php?idConteudo=<?=$conteudoSalvo['idConteudo']?>">
                                            <h5 class="tituloConteudoCard group card-title inner list-group-item-heading">
                                                <?=$conteudoSalvo['titulo']?>
                                            </h5>
                                        </a>
                                    <!-- PRÉVIA DO CONTEÚDO -->
                                        <p class="group inner list-group-item-text textoCardConteudo">
                                            <?=strip_tags(mb_strimwidth($conteudoSalvo['conteudo'],0,120,"..."))?>
                                        </p>
                                        <hr>
                                        <!-- INFORMAÇÕES (AUTOR E DATA) -->
                                        <h6 class="autorCard group card-title inner list-group-item-heading">
                                            <img class="imagemAutorCard" src="<?=$conteudoSalvo['fotoPerfil']?>">
                                            Postado por <?=$conteudoSalvo['nome']?> em <?=$conteudoSalvo['dataPostagem']?>
                                        </h6>
                                    </div>
                                </div>
                            </div>



                        <?php
                                $cont++;
                            }
                        ?>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
<?php
    

    require_once('footer.php');
?>   
    