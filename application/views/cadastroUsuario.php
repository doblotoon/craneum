<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
    require_once('header.php');
?>

    <!-- main -->
    </body>
        <section class="banner-bottom py-5">
            <div class="container py-md-4">
                <h3 class="tittle-w3layouts two text-center">Cadastro</h3>
                <div class="comment-top mt-5 row">
                    <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                        <img class="img-fluid" src="../assets/images/apply2.jpg" alt="">
                    </div>
                    <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                        <form action="../controllers/CadastroUsuario.php" method="post" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-lg-6 form-group">
                                    <label>Nome Completo</label>
                                    <input class="form-control" type="text" name="nome" placeholder="" required="">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Foto de perfil</label>
                                    <div class="custom-file">
                                        <input type="file" name="fotoPerfil"  class="custom-file-input" id="" required accept=".jpg, .jpeg, .png" file-maxsize="10240">
                                        <label class="custom-file-label" for="inputGroupFile03">Escolha o arquivo</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>N° de matrícula / SIAPE</label>
                                    <input class="form-control" type="text" name="idUsuario" placeholder="" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Senha</label>
                                    <input class="form-control" type="password" name="senha" placeholder="" required="">
                                </div>

                                <div class="col-lg-6 form-group">
                                <label>Confirmação de senha</label>
                                    <input class="form-control" type="password" name="confirmaSenha" placeholder="" required="">
                                </div>
                            </div>
                            <button type="submit" class="btn submit mt-3">Cadastrar</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    <!-- //main -->

    <!-- footer -->
    
<?php
    require_once('footer.php');
?>   

    <!-- //footer -->


</body>

</html>
