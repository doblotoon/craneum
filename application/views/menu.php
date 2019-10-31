<?php
    //session_destroy();
    //$pasta = __DIR__;
    //echo $pasta;
    // TODO: Alterar o formato dos links para eles funcionarem em todas as páginas da forma correta.
?>
                            
  <nav id='home' class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <h1 id="logo">Craneum</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link linkCinza" href="<?=$caminho?>views/home.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
<?php
  if(empty($_SESSION)){
?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle linkCinza" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-sign-in-alt"></i> Entrar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item linkCinza" href="<?=$caminho?>views/login.php">Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item linkCinza" href="<?=$caminho?>views/cadastroUsuario.php">Registrar-se</a>
          </div>
        </li>
<?php
  } else {
?>
        <li class="nav-item active">
          <a class="nav-link linkCinza" href="<?=$caminho?>views/paginaUsuario.php"><i class="fas fa-user"></i> Página do Usuario <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link linkCinza" href="<?=$caminho?>views/cadastroConteudo.php"><i class="fas fa-pencil-alt"></i> Cadastrar Conteúdo<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link linkCinza" href="<?=$caminho?>views/sair.php"><i class="fas fa-sign-out-alt"></i> Sair <span class="sr-only">(current)</span></a>
        </li>
      
<?php
  }
?>
      </ul>
<?php
  if($URLAtual!="index" and $URLAtual!="home" and $URLAtual!="resultadoPesquisa" and !empty($URLAtual)){
?>
      <form method="get" action=" " class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="pesquisa" type="search" placeholder="Pesquise" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 botaoPesquisarMenu" type="submit">Ir</button>
      </form>
<?php //pesquisaaa
                     /*   #'%{$_GET['pesquisa']}%'
                        $query = "select idConteudo,titulo from conteudo where titulo like '%{$_GET['pesquisa']}%'";//no phpmyadmin tá dando bom
                        $pesquisa = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);


                        //echo "<pre>";
                        print_r($pesquisa);
                        //echo"</pre>";
                     */  
                    
  }
?>
    </div>
  </nav>

  <?php
  //print_r($pesquisa);

  //print_r($_GET);
//echo 'aaaaaaaaaaaaaaaa';