<?php

    require_once('header.php');

    if(empty($_GET['erro'])){
        $_GET['erro'] = 'naoEncontrado';
    }

    switch ($_GET['erro']) {
        case 'acessoNegado':
            $texto = "É necessário estar logado para acessar esta página";
            break;
        
        case 'naoEncontrado':
            $texto = "Não foi encontrado nenhum resultado";
            break;

        case 'admin':
            $texto = "Apenas administradores tem acesso à essa página";
            break;

        case 'adminNaoLogado':
            $texto = "É necessário estar logado para acessar essa página e apenas administradores tem acesso.";
            break;

        case 'jaCadastrado':
            $texto = "Você já está cadastrado(a) e/ou logado!";
            break;
    }

?>

    <h2 class="tittle-w3layouts two text-center tituloPagUser espacoErro">ERRO</h2>
    <div class="text-center espacoInferiorErro">
        <img src="../assets/images/erro/<?=$_GET['erro']?>.png">
        <h3 class="espacoErro"><?=$texto?></h3>

<?php

    if($_GET['erro']=='acessoNegado' or $_GET['erro']=='adminNaoLogado'){
        print('<h4><a href="login.php">Logue-se</a></h4>');
    } else {
        print('<meta http-equiv="refresh" content=4;url="home.php">');
    }

?>
    </div>

<?php
    require_once('footer.php');
?>