<?php
    require_once('header.php');
    $foto = $_SESSION['fotoPerfil'];

    if(empty($_SESSION)){
        header("Location: erro.php?erro=acessoNegado");
    }
?>

    <body>
        <div class="espacoInferiorUsuario"></div>

        <div class="container bootstrap snippet">

            <h3 class="tittle-w3layouts two text-center">Editar Usuário</h3>

            <!-- Foto User -->
                
            <div class="row">
                <div class="col-sm-3 editarFotoUser">
                    <div class="text-center">
                        <div id='labelFotoUpdate'>
                            <img src="<?=$_SESSION['fotoPerfil']?>" id='imgPerfilUpdate' class="avatar img-circle img-thumbnail" alt="avatar">
                            <div id='cover'>
                                <label for="fotoPerfilUpdate" id='textoCover'>    
                                    Atualizar <i class='material-icons'>edit</i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- Formulário-->

                <div class="col-sm-9 espacoSuperiorEditarUsuario">

                    <div class="tab-content">
                    
                        <form class="form" action="../controllers/EditarUsuario.php" method="post" enctype='multipart/form-data' id="registrationForm">
                            
                             <!-- Nome -->

                            <div class="form-group"> 
                                <div class="col-xs-6">
                                    <label for="nome">
                                        <h5>Novo Nome</h5>
                                    </label>
                                    <input type="text" class="form-control" name="nome" id="first_name" value="<?=$_SESSION['nome']?>">
                                </div>
                            </div>

                             <!-- Email -->
                
                            <div class="form-group espacoFormGroupEditarUsuario">   
                                <div class="col-xs-6">
                                    <label for="email">
                                        <h5>Novo Email</h5>
                                    </label>
                                    <input type="email" class="form-control" name="email" id="email" value="<?=$_SESSION['email']?>">
                                </div>
                            </div>

                             <!-- Senha -->

                            <div class="form-group espacoFormGroupEditarUsuario">
                                <div class="col-xs-6">
                                    <label for="senha">
                                        <h5>Nova Senha</h5>
                                    </label>
                                    <input type="password" class="form-control" name="senha" id="password" placeholder="Senha" title="enter your password.">
                                </div>
                            </div>

                             <!-- Confirmar Senha -->

                            <div class="form-group espacoFormGroupEditarUsuario">
                                <div class="col-xs-6">
                                    <label for="confirmarSenha">
                                        <h5>Confirmar Nova Senha</h5>
                                    </label>
                                    <input type="password" class="form-control" name="confirmarSenha" id="password2" placeholder="Repita a sua senha" title="enter your password2.">
                                </div>
                            </div>

                            <div class="form-group espacoFormGroupEditarUsuario">
                                <div class="col-xs-6">
                                    <input type="file" class="form-control" name="fotoPerfil" id="fotoPerfilUpdate">
                                </div>
                            </div>

                             <!-- Botões -->

                            <div class="form-group espacoFormGroupEditarUsuario">
                                <div class="col-xs-12 text-center">
                                    <br>
                                    <button class="btn btn-success" type="submit">Atualizar Dados</button>
                                    <button class="btn btn-info" type="reset">Limpar</button>
                                    <button class="btn btn-danger" type="submit">
                                        <a href="../controllers/ExcluirUsuario.php?idUsuario=<?=$_SESSION['id']?>" id="botaoExcluirUsuarioPagEditarUsuario">Excluir Conta</a>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="espacoInferiorEditarUsuario"></div>

<?php
    require_once('footer.php');
?>   