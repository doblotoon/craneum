<?php
    require_once('header.php');
    $foto = $_SESSION['fotoPerfil'];
?>

<div class="espacoInferiorUsuario">.</div>


    <div class="container bootstrap snippet">

    
        <div class="row">
            <div class="col-sm-3 text-center espacoInferiorFotoPerfilEditar"><h1>Username</h1></div>
        </div>
        
        <div class="row">
  		    <div class="col-sm-3">
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

    	<div class="col-sm-9">

          <div class="tab-content">
                  <form class="form" action="../controllers/EditarUsuario.php" method="post" enctype='multipart/form-data' id="registrationForm">
                      
                      <div class="form-group"> 
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Novo Nome</h4></label>
                              <input type="text" class="form-control" name="nome" id="first_name" placeholder="Ex.: João Silva" title="enter your first name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">   
                          <div class="col-xs-6">
                              <label for="email"><h4>Novo Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Ex.: joao.silva@gmail.com" title="enter your email.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="password"><h4>Nova Senha</h4></label>
                              <input type="password" class="form-control" name="senha" id="password" placeholder="Senha" title="enter your password.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="password2"><h4>Confirmar Nova Senha</h4></label>
                              <input type="password" class="form-control" name="confirmarSenha" id="password2" placeholder="Repita a sua senha" title="enter your password2.">
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-xs-6">
                            <label ><h4>Nova Foto de Perfil</h4></label>
                              <input type="file" class="form-control" name="fotoPerfil" id="fotoPerfilUpdate">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit">Atualizar Dados</button>
                               	<button class="btn btn-lg btn-info" type="reset">Limpar</button>
                                <button class="btn btn-lg btn-danger" type="submit"><a href="../controllers/ExcluirUsuario.php">Excluir Conta</a></button>
                            </div>
                      </div>
              	</form>
            </div>
        </div>
    </div>
</div>

<div class="espacoInferiorEditarUsuario">.</div>

<?php
    require_once('footer.php');
?>   

    <!-- //footer -->


</body>

</html>