<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
    require_once 'header.php';

    if(empty($_SESSION)){
        header("Location: erro.php?erro=acessoNegado");
    } else {
        if($_SESSION['tipo']=="professor"){
            echo $_SESSION['tipo']."<br>";
            $tipo = $_SESSION['tipo']."es";
        }else{
            echo $_SESSION['tipo']."<br>";
            $tipo = $_SESSION['tipo']."s";
        }
        require "../models/".ucwords($tipo).".php";
    
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
                            Marcus Doe
                        </div>
                        <div class="profile-usertitle-job">
                            Estudante
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <a href="<?=$caminho?>views/editarUsuario.php"><button type="button" class="btn btn-warning btn-sm"><span class="fa fa-edit"></span> Editar</button></a>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="navUser">
                            <li class="active">
                                <a href="#">
                                <span class="fa fa-bookmark espacoIcon"></span>
                                Conteúdos Salvos </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="fa fa-bell espacoIcon"></span>
                                Painel de Controle </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
            <div class="profile-content">
                <h4 class="tittle-w3layouts two text-center tituloPagUser">Conteúdos Salvos</h4> 
                <div id="products" class="row view-group my-lg-5 my-4">
                    <div class="item col-lg-6 mt-3">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="../assets/images/g1.jpg" alt="">
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
                    <div class="item col-lg-6 mt-3">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="../assets/images/g2.jpg" alt="">
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

                    <div class="item col-lg-6 mt-3 espacoAcima">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="../assets/images/g1.jpg" alt="">
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
                    <div class="item col-lg-6 mt-3 espacoAcima">
                        <div class="thumbnail card">
                            <div class="img-event">
                                <img class="group list-group-image img-fluid" src="../assets/images/g2.jpg" alt="">
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

                </div>     
            </div>
            </div>
        </div>
    </div>

    
<?php
    }
    require_once('footer.php');
?>   