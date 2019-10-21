<?php
    require_once('header.php');
    if(!empty($_SESSION)){
        header("Location: erro.php?erro=jaCadastrado");
    } else {
?>
    
    <body>
        <section class="banner-bottom py-5">
            <div class="container py-md-4">

                <h3 class="tittle-w3layouts two text-center">Cadastro</h3>

                <div class="comment-top mt-5 row">

                    <!-- Imagem -->
                    <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                        <img class="img-fluid" src="../assets/images/apply2.jpg" alt="">
                    </div>

                    <!-- Formulário -->
                    <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                        <form action="../controllers/CadastroUsuario.php" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <!-- Nome -->
                                <div class="col-lg-6 form-group">
                                    <label for="nome">Nome Completo</label>
                                    <input class="form-control" type="text" name="nome" placeholder="" required="">
                                </div>

                                <!-- Email -->
                                <div class="col-lg-6 form-group">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                            </div>

                            <div class="row">

                                <!-- Foto de Perfil -->
                                <div class="col-lg-6 form-group">
                                    <label for="fotoPerfil">Foto de perfil</label>
                                    <div class="custom-file">
                                        <input type="file" name="fotoPerfil"  class="custom-file-input" id="" required accept=".jpg, .jpeg, .png" file-maxsize="10240">
                                        <label class="custom-file-label" for="inputGroupFile03">Escolha o arquivo</label>
                                    </div>
                                </div>

                                <!-- Matrícula/Siape -->
                                <div class="col-lg-6 form-group">
                                    <label for="idUsuario">N° de matrícula / SIAPE</label>
                                    <input class="form-control" type="text" name="idUsuario" placeholder="" required="">
                                </div>

                            </div>

                            <div class="row">

                                <!-- Senha -->
                                <div class="col-lg-6 form-group">
                                    <label for="senha">Senha</label>
                                    <input class="form-control" type="password" name="senha" placeholder="" required="">
                                </div>

                                <!-- Confirmar Senha -->
                                <div class="col-lg-6 form-group">
                                <label>Confirmação de senha</label>
                                    <input class="form-control" type="password" name="confirmaSenha" placeholder="" required="">
                                </div>

                            </div>

                            <!-- Cadastrar -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn submit mt-3 botaoCadastrarUser">Cadastrar</button>
                                    </div>
                                </div>
						    </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- footer --> 
<?php
    }
    
    require_once('footer.php');
?>   
    <!-- //footer -->
