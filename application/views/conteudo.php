<?php
    /* REQUISIÇÕES */
    require_once "head.php";
    require_once "../models/Conteudo.php";
    require_once "../models/Comentario.php";
    require_once "../models/Tag.php";
    require_once "../models/Disciplina.php";
    require_once "../models/Usuario.php";
    /* LÓGICA */
    $idConteudo = (int) $_GET['idConteudo'];
    $conteudo = new Conteudo();
    $conteudoSelecionado = $conteudo->getConteudo($idConteudo);
    if (empty($conteudoSelecionado)) {
        require_once "menu.php";
        echo "</br></br></br>";
        echo "<div class='container'><div class='alert alert-warning'>Conteudo Não Encontrado! Para voltar para a home <a href='../index.php'><strong>Clique Aqui!</strong></a></div></div>";
        exit;
    }
    //print_r($conteudoSelecionado['fk_cont_idUsuario']);
    //print_r($_SESSION['id']);
    $conteudoSelecionado['dataPostagem'] = date("d/m/Y", strtotime($conteudoSelecionado['dataPostagem']));
    if(!$conteudoSelecionado){
        header("Location: erro.php?erro=naoEncontrado");
    }
    $comentario = new Comentario;
    $comentarios = $comentario->getComentario($idConteudo);
    $respostas = $comentario->getResposta();
    
 //   print "<pre>";
 //   print_r($comentarios);
 //   exit;
    $tag = new Tag();
    $tags = $tag->getTagsConteudo($conteudoSelecionado['idConteudo']);
    $disciplina = new Disciplina();
    $disciplinas = $disciplina->getDisciplinasConteudo($conteudoSelecionado['idConteudo']);
    if (!empty($_SESSION)) {    
        $usuarioSalvo = new Aluno();
        $salvo = $usuarioSalvo->taSalvo($_SESSION['id'],$idConteudo);
    }
    if (!$login) {
        $precisaLogar = "<div class='alert alert-primary' role='alert'>
        Para cadastrar uma dúvida você precisa estar logado. <a href='login.php?conteudo={$idConteudo}'>Clique aqui</a> para se logar.
      </div>";
        $displayNone = "hide";
    } else {
        $precisaLogar = '';
        $displayNone = '';
    }
    /* DESIGN */
    echo "
    
    <style>
    
    /* Sets the actual background images to adorable kitties. $ part is crucial. */
    .hide{
        display:none;
    }
    .wrapper{
        overflow-y:scroll !important;
    }
    .static{
        background-color: #fff;
    }
    .bg1{
        height: 55vh;
    }

    p {
        color: #343434 !important;
    }
    .bg1::after {
      background-image: background: rgb(0,0,0);
      background: radial-gradient(circle, rgba(0,0,0,0.09653368183210786) 35%, rgba(0,14,17,0.6287465669861695) 100%), url('".$conteudoSelecionado['fotoCapa']."');
      background-position: center;
      background-repeat: no-repeat;
    background-size: cover;
    
    }
    
    body,html{margin:0;padding:0;overflow-y:hidden !important;}
    </style>
    <script>
    $('.container img').replaceWith(function(i, v){
        return $('<div/>', {
            style: 'background-image: url(' + this.src + ');' + 
            'width:' + this.width + 'px;' + 
            'height:' + this.height + 'px;' ,
            class: 'fakeImg'
        })
    })
    </script>
    <body>
        <main class='wrapper'>";
    require_once "menu.php";   
?>

            <section class="section parallax bg1 tituloConteudo">
                <div class="container">
                    <h1 class="infosConteudo"><?=$conteudoSelecionado['titulo']?></h1>
                    <h4 class="infosConteudo">
                        <i class="fas fa-pen espacoIconInfo"></i> Postado por <?=$conteudoSelecionado['nome']?> em <?=$conteudoSelecionado['dataPostagem']?>
                    </h4>

<?php
                    if (isset($_SESSION['id'])){
                    
                        if($conteudoSelecionado['idUsuario']!=$_SESSION['id']){
                            if (isset($salvo)) {    
                                if ($salvo || (isset($_GET['salvo']) && $_GET['salvo'] == 1)) {
                                    $acao = "remover";   
                                    $texto = "Remover dos Salvos";
                                }else{
                                    $acao = "salvar";
                                    $texto = "Salvar";
                                }
                        
                            echo "<a href='../controllers/SalvaConteudo.php?acao={$acao}&idConteudo={$idConteudo}&idUsuario={$_SESSION['id']}'><button class='btn btn-light espacoSalvar'><i class='fas fa-bookmark'></i> {$texto}</button></a>";
                            }
                        }

                        if($_SESSION['tipo']=='administrador' and $conteudoSelecionado['idUsuario']!=$_SESSION['id']){
?>
                            <a href='?acao=excluir&idConteudo=<?=$conteudoSelecionado["idConteudo"]?>'>
                                <button type="button" class="btn btn-danger espacoSalvar"><i class="fas fa-trash-alt"></i> Excluir</button>
                            </a>
<?php
                        }

                        if($conteudoSelecionado['idUsuario']==$_SESSION['id']){
    
?>
                        <div class="espacoSuperiorBotoesConteudoProf">
                            <a href="editarConteudo.php?idConteudo=<?=$conteudoSelecionado['idConteudo']?>"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</button></a>
                            <a href='?acao=excluir&idConteudo=<?=$conteudoSelecionado["idConteudo"]?>'>
                                <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</button>
                            </a>
                        </div>
<?php                
                        }
                        

                    }
                
?>
                </div>
            </section>

            <section class="section static">

                <div class="espacoAntesConteudo"></div>
                

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-3 aEsquerda">
                            <br>
                            <h6 class="aEsquerda negrito">Disciplina(s): </h6>
<?php
                                //print_r($disciplinas);
                                foreach ($disciplinas as $disciplina) {
                                    echo '<a href="resultadoPesquisa.php?termo='.$disciplina['disciplina'].'&ft=2">
                                                <h5 class="aEsquerda">
                                                    <span class="badge badge-secondary aEsquerda espacoDireita disciplina">'.$disciplina['disciplina'].'</span>
                                                </h5>
                                            </a>';
                                }
?>
                        </div>
                        <hr class="mb-4">

                        <!-- CONTEUDO -->
                                    
                        <div class="col-12 card" id='colunaConteudo'>
                            <br>
                            <div class="col-md-12 mb-3" style="min-height:120px;">
                                <?=$conteudoSelecionado['conteudo']?>

                            <span id='adendos'></span>
<?php
                                foreach($comentarios as $duvida){
                                    if($duvida['adendo']==1){
                                        echo "<h3 class='text-center tituloAdendo'>Adendo(s)</h3>";
                                        break;
                                    }
                                }
                            
                                foreach ($comentarios as $duvida) {
                                    if ($duvida['adendo'] == 1) {
                                        echo "<span id='".$duvida['idDuvida']."'>";
?>
                                        <div class="comment-wrapper">
                                            <div class="panel panel-info">
                                                <div class="panel-body">
                                                    <hr>
                                                    <ul class="media-list">
                                                        <li class="media">
                                                            <img src="<?=$duvida['fotoPerfil']?>" alt="" class="img-circle">
                                                            <div class="media-body">
                                                                <strong class="nomeUsuarioComentario"><?=$duvida['nome']?></strong><p> em <?= date("d/m/Y", strtotime($duvida['dataDuvida']))?></p>
                                                                <p>
                                                                    <?=$duvida['duvida']?> 
                                                                </p>
                                                            </div>
<?php
                                                                    
                #<!-- final da getResposta-->#
                    #<!-- inicio da cadastrarResposta-->#
                                    //print_r($duvida);
                                    if (isset($_SESSION['id']) and $_SESSION['id'] == $conteudoSelecionado['idUsuario'] and $duvida['respondido']==0) {
                                        echo "<a href='?idConteudo={$_GET['idConteudo']}&rc=1&idDuvida={$duvida['idDuvida']}&abre=true&tipoResp=1#adendos'><button type='button' class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'><i class='fas fa-reply'></i></button></a>";
                                    }
                        
                    #<!-- final da cadastrarResposta-->#

                                    // testa se existe a id do usuario na session
                                    if(isset($_SESSION['id'])){
                                        // testa se a id do usuario é igual a da session para editar/excluir comentario 
                                        if ($duvida['idUsuario']==$_SESSION['id']) {
                                            echo "<form action='../controllers/ExcluirComentario.php' method='post'> <button class='btn btn-sm btn-danger espacoDireitoBotaoComentarios' type='submit'><i class='fas fa-trash-alt'></i></button> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
                                            echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}&tipo=adendo#adendos'><button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'><i class='fas fa-edit'></i></button></a>";
                                        }
                                        if ($_SESSION['tipo']=="professor" and $conteudoSelecionado['idUsuario']==$_SESSION['id']) {
                                            echo "<form action='../controllers/TransformaComentario.php' method='post'> <input class='btn btn-sm btn-dark' type='submit' value='Tornar Comentário'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'> <input type='hidden' name='funcao' value=0> </form>";   
                                        }
                                    }
?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>          
<?php

                    if (isset($_GET['rc']) and isset($_SESSION['id'])) {
                        if ( $_GET['rc']==1 and $_GET['idDuvida']==$duvida['idDuvida']) {
                            
                            echo"
                            <form action='../controllers/CadastrarResposta.php?adendo=1' method='post' class='' >
                                        <textarea class='form-control' name='resposta' placeholder='Escrever resposta' rows='4'></textarea>
                                        <button class='btn btn-primary espacoSuperiorComentarDuvida' type='submit'>Comentar Resposta</button>
                                        <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'>
                                        <input type='hidden' name='idConteudo' value='{$_GET['idConteudo']}'>
                            </form>";
                        }
                    }

                    if(isset($_SESSION['id']) and isset($_GET['acao']) and $_GET['acao']=='editar'){
                        if($duvida['idUsuario']==$_SESSION['id'] and isset($_GET['tipo']) and $_GET['idDuvida']==$duvida['idDuvida']) {
?>
                                <form action="../controllers/EditarComentario.php" method="post">
                                    <textarea class="form-control" name="duvidaAtual" id="" rows="4"><?php print($duvida['duvida']);?></textarea>
                                    <button class="btn btn-primary espacoSuperiorComentarDuvida" type="submit">Comentar Dúvida Editada</button>
                                    <input type="hidden" name="id" value="<?=$_GET['idConteudo']?>">
                                    <input type="hidden" name="idDuvida" value="<?=$_GET['idDuvida']?>">
                                    
                                </form>
<?php
                        }
                    }

                    

                foreach ($respostas as $resposta ){  
                    if ($duvida['idDuvida']==$resposta['fk_resp_idDuvida']) { #resposta

?>

                            <div class="comment-wrapper resposta">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <hr>
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="media-body">
                                                    <strong class="nomeUsuarioComentario">Resposta do(a) Professor(a)</strong><p> respondida em <?= date("d/m/Y", strtotime($resposta['dataResposta']))?></p>
                                                    <p id='<?=$duvida["idDuvida"]?>'>
                                                        <?=$resposta['resposta']?> 
                                                    </p>
                                                </div>
<?php
     #<!-- inicio da editarResposta e da excluirResposta-->#
                            // print_r($conteudoSelecionado);
                            if(isset($_SESSION['id'])){
                                if($conteudoSelecionado['fk_cont_idUsuario']==$_SESSION['id']) {
                                    echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editarResp&idResposta={$resposta['idResposta']}&tipo=adendo#adendos'>
                                               <button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'><i class='fas fa-edit'></i></button>
                                         </a>";
                                    
                                    echo "<form action='../controllers/ExcluirResposta.php' method='post'> 
                                            <button type='submit' class='btn btn-sm btn-danger espacoDireitoBotaoComentarios'><i class='fas fa-trash-alt'></i></button>
                                            <input type='hidden' name='id' value='{$_GET['idConteudo']}'> 
                                            <input type='hidden' name='idResposta' value='{$resposta['idResposta']}'>
                                            <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'>
                                        </form>";   
                                    
                                }
                            }
                            
                    #<!-- final da editarResposta e da excluirResposta-->#
?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
<?php

                       
                    }
                    if (isset($_GET['acao']) and $_GET['acao'] == 'editarResp' and $_GET['idResposta']==$resposta['idResposta']) {
                        if (isset($_GET['tipoResp']) and $_GET['tipoResp']==1) {
                            echo "<script>
                                    $(document).ready(function(){
                                        $('#formDuvida').addClass('hide');
                                    })

                                </script>";
                        }else {
                            echo "<script>
                                    $(document).ready(function(){
                                        $('#formDuvida').removeClass('hide');
                                    })

                                </script>";
                        }
                       
                        if (isset($_GET['tipo'])) {
                            
                        
                            $ex = $resposta['resposta'];
                            //echo "CLIQUEI<BR>";
                            echo "<form action='../controllers/EditarResposta.php?tipo=".$_GET['tipo']."' method='post'>
                                    
                                    <textarea class='form-control' name='respostaAtual' id='' rows='4'>{$ex}</textarea>
                                    <button class='btn btn-primary espacoSuperiorComentarDuvida' type='submit'>Comentar Dúvida Editada</button>
                                    <input type='hidden' name='id' value='{$_GET['idConteudo']}'>
                                    <input type='hidden' name='idResposta' value='{$_GET['idResposta']}'>
                                </form>";
                        }
                    }
                //        echo "<hr>";
                        echo "</span>";
                    }
                }

                
        }
?>
                            </div>
                            <hr class="mb-4">
                        </div>
                
                        <!-- TAGS -->

                        <div class='col-md-12 mb-3 fixed'>
                            <br>
                            <h6 class="aEsquerda negrito">Tags: </h6>
<?php
                            foreach ($tags as $key => $tag) {
                                $tagNome = $tag['tag'];
                                echo '<h5><a href="resultadoPesquisa.php?termo='.$tagNome.'&ft=3"><span class="badge badge-secondary aEsquerda espacoDireita tag">'.$tagNome.'</span></h5></a>';
                            }
?>
                        </div>

                        <!-- BOTAO DUVIDA -->
                        <div class='col-12'>
                            <button type="button" id='someDuvida' class="btn btn-secondary btn-block botaoDuvida">
                                <i class="far fa-eye"></i>
                            </button>
                        </div>

                        <!-- DIV DOS COMENTÁRIOS -->
                            
                            <div class="col-1"></div>
                            <div class="col-10 hide" id='colunaComentario'>
                                <h4 class="text-center">Dúvidas: </h4>
                                <br><br>
<?php
                $adendoCont = 0;
                $comentarioCont = 0;
                foreach ($comentarios as $key => $duvida) {
                    if ($duvida['adendo']==1) {
                        $adendoCont++;
                    }else {
                        $comentarioCont++;
                    }
                }
                    if ($adendoCont>0 and $comentarioCont==0 or empty($comentarios)) {
                        echo "<div class='alert alert-warning'><h5> Não há nenhuma dúvida cadastrada</h5></div>";
                        echo "<hr>";
                        //echo $adendoCont;
                    } else {  
?>
                                <div class="comment-wrapper">
                                    <div class="panel panel-info">
                                        <div class="panel-body">
                                        <hr>
                                        <ul class="media-list">
<?php
        foreach ($comentarios as $duvida) {
            //print_r($duvida);
            //print $duvida['nome'];
            if ($duvida['adendo'] == 0) {
            
                //$a=$comentarios->trocaIDporNome($duvida['fk_duv_idUsuario']);
                //print_r("<pre>$duvida</pre>");
                echo "<span id='".$duvida['idDuvida']."'>";
?>
                                            <li class="media" id="<?=$duvida['idDuvida']?>">
                                                <img src="<?=$duvida['fotoPerfil']?>" alt="" class="img-circle">
                                                <div class="media-body">
                                                    <strong class="nomeUsuarioComentario"><?=$duvida['nome']?></strong><p> em <?= date("d/m/Y", strtotime($duvida['dataDuvida']))?></p>
                                                    <p>
                                                        <?=$duvida['duvida']?> 
                                                    </p>
                                                </div>
<?php
                                            #<!-- inicio da getResposta--># precisa de css
                                                
                        
                                            #<!-- final da getResposta-->#
            #<!-- inicio da cadastrarResposta-->#
                //print_r($duvida);
                if (isset($_SESSION['id']) and $_SESSION['id'] == $conteudoSelecionado['idUsuario'] and $duvida['respondido']==0) {
                    echo "<a href='?idConteudo={$_GET['idConteudo']}&rc=1&idDuvida={$duvida['idDuvida']}&abre=true#someDuvida'><button type='submit' class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'><i class='fas fa-reply'></i></button></a>";
                }
                
            #<!-- final da cadastrarResposta-->#
            
               # print_r($_SESSION);
                if(isset($_SESSION['id'])){
                    if ($duvida['idUsuario']==$_SESSION['id']) {
                        echo "<form action='../controllers/ExcluirComentario.php' method='post'> <button class='btn btn-sm btn-danger espacoDireitoBotaoComentarios' type='submit'><i class='fas fa-trash-alt'></i></button> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
                        echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}&abre=true#someDuvida'><button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'>Editar</button></a>";
                    }
               #    print_r($_SESSION['tipo']);
                    if ($_SESSION['tipo']=="professor" and $conteudoSelecionado['idUsuario']==$_SESSION['id']) {
                        echo "<form action='../controllers/TransformaComentario.php' method='post'> <input class='btn btn-sm btn-dark' type='submit' value='Marcar como Adendo'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'> <input type='hidden' name='funcao' value=1> </form>";   
                    }
                }
?>
                                            </li>
<!--                                            <li class="media resposta">
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                                <div class="media-body">
                                                    <span class="text-muted pull-right">
                                                        <small class="text-muted"><?=$duvida['dataDuvida']?></small>
                                                    </span>
                                                    <strong class="text-success"></strong>
                                                    <p>
                                                        <?=$duvida['duvida']?>
                                                    </p>
                                                </div>
                                            </li> -->

<?php
                echo "<span id='".$duvida['idDuvida']."'>";
            

        foreach ($respostas as $resposta ){  
            if ($duvida['idDuvida']==$resposta['fk_resp_idDuvida']) { #resposta
                
?>


<div class="comment-wrapper resposta">
    <div class="panel panel-info">
        <div class="panel-body">
            <hr>
            <ul class="media-list">
                <li class="media">
                    <div class="media-body">
                        <strong class="nomeUsuarioComentario">Resposta do(a) Professor(a)</strong><p> respondida em <?= date("d/m/Y", strtotime($resposta['dataResposta']))?></p>
                        <p id='<?=$duvida["idDuvida"]?>'>
                            <?=$resposta['resposta']?> 
                        </p>
                    </div>
<?php
                if(isset($_SESSION['id'])){
                    if($conteudoSelecionado['fk_cont_idUsuario']==$_SESSION['id']) {
                        echo "<form action='../controllers/ExcluirResposta.php' method='post'> 
                                <button class='btn btn-sm btn-danger espacoDireitoBotaoComentarios' type='submit'><i class='fas fa-trash-alt'></i></button>
                                <input type='hidden' name='id' value='{$_GET['idConteudo']}'> 
                                <input type='hidden' name='idResposta' value='{$resposta['idResposta']}'>
                                <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'>
                            </form>";   
                            echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editarResp&idResposta={$resposta['idResposta']}&abre=true#someDuvida'>
                                    <button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'><i class='fas fa-edit'></i></button>
                                </a>";
                    }

                }
?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
<?php                

            if (isset($_GET['acao']) and $_GET['acao'] == 'editarResp' and $_GET['idResposta']==$resposta['idResposta']) {
                if (!isset($_GET['tipo'])) {
                    
                
                    $ex = $resposta['resposta'];
                    //echo "CLIQUEI<BR>";
                    echo "<form action='../controllers/EditarResposta.php' method='post'>
                            
                            <textarea class='form-control' name='respostaAtual' id='' rows='4'>{$ex}</textarea>
                            <button class='btn btn-primary espacoSuperiorComentarDuvida' type='submit'>Comentar Dúvida Editada</button>
                            <input type='hidden' name='id' value='{$_GET['idConteudo']}'>
                            <input type='hidden' name='idResposta' value='{$_GET['idResposta']}'>
                        </form>";
                }
            }
                #<!-- inicio da editarResposta e da excluirResposta-->#
                    // print_r($conteudoSelecionado);
                    
                        
                #<!-- final da editarResposta e da excluirResposta-->#
            }
        }
    }

    if (isset($_GET['rc'])) {
        if ( $_GET['rc']==1 and $_GET['idDuvida']==$duvida['idDuvida']) {
            if (!isset($_GET['tipoResp'])) {
                echo "<script>
                        $(document).ready(function(){
                            $('#formDuvida').addClass('hide');
                            $('#formResposta').removeClass('hide');
                        })
                
                    </script>";

                echo"
                
                    <form action='../controllers/CadastrarResposta.php' method='post' class='' id='formResposta'>
                                <textarea class='form-control' name='resposta' placeholder='Escrever Resposta' rows='4'></textarea>
                                <button class='btn btn-primary espacoSuperiorComentarDuvida' type='submit'>Comentar Resposta</button>
                                <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'>
                                <input type='hidden' name='idConteudo' value='{$_GET['idConteudo']}'>
                    </form>";
            }else {
                echo "<script>
                        $(document).ready(function(){
                            $('#formDuvida').removeClass('hide');
                            $('#formResposta').addClass('hide');
                        })
                
                    </script>";
            }
        }
    }
}
    }
    
    if (isset($_GET['acao']) and $_GET['acao']=="excluir") {//acho que isso vai para a controller
        $a = $comentario->deletarComentario($_GET['idDuvida']);
        header("Location: ../views/conteudo.php?idConteudo={$_GET['idConteudo']}");
        //echo "$('#".$_GET['idDuvida']."').addClass('hide');"; isso aqui é lá dos javascript do tanso
    }
    if (isset($_GET['acao']) and $_GET['acao'] == "editar") { // aqui a gente vai pegar o comentario pra colocar no textarea pra editar a dúvida
        foreach ($comentarios as $key => $value) {
        /*print("tá no foreach");
        print("<br>");
        print_r($value['idDuvida']);*/
            if ($value['idDuvida'] == $_GET['idDuvida']) {
                $ex = $value; //colcoar aqui o comenjtário antigo; 
                /*echo "<pre>";
                print_r($ex);
                echo "</pre>";
                print($ex['duvida']);*/
                #-#--fazer ajax com isso aqui, no caso, cadastrar comentario--#-#
                if (isset($_POST['cadastrar']) and $_POST['cadastrar'] == true){ //a verificação era pra ser essa: isset($_GET['acao']) and $_GET['acao']=="cadastrar"
                    //print_r($_POST);
                    $arrayCadastrarComentario=[
                        "duvida" => $_POST['duvida'],
                        "idConteudo" => $_GET['idConteudo'],
                        "idUsuario" => $_SESSION['id']
                    ];
                    //echo isset($arrayCadastrarComentario);
                    if (isset($arrayCadastrarComentario)) {
                        //try {
                            $duvida = $comentario->cadastrarComentario($arrayCadastrarComentario);
                            $arrayCadastrarComentario = 0;
                            $_POST['cadastrar'] = false;  
                            unset($_POST['cadastrar']);  
                            //print_r($arrayCadastrarComentario."sls,");
                           // print_r($_POST);
                        //} catch (PDOException $e) {
                        //   echo $e->getMessage();
                    // }
                        
                    }
                }
            }  
            //$ex = ;
        }

            if(!isset($_GET['tipo'])){
        
?>

</ul>
                                <form action="../controllers/EditarComentario.php" method="post">
                                    <textarea class="form-control" name="duvidaAtual" id="" rows="4"><?php print($ex['duvida']);?></textarea>
                                    <button class="btn btn-primary espacoSuperiorComentarDuvida" type="submit">Comentar Dúvida Editada</button>
                                    <input type="hidden" name="id" value="<?=$_GET['idConteudo']?>">
                                    <input type="hidden" name="idDuvida" value="<?=$_GET['idDuvida']?>">
                                    
                                </form>

    <?php
        }
    } else {
        if(isset($_SESSION['id']) and $_SESSION['id']!=$conteudoSelecionado['idUsuario']){
    ?>
                                    <form action="../controllers/CadastrarComentario.php" method="post" class="" id="formDuvida">
                                        <textarea class="form-control" name="duvida" placeholder="Escreva um comentário" rows="4"></textarea>
                                        <button class="btn btn-primary espacoSuperiorComentarDuvida" type="submit">Comentar Dúvida</button>
                                        <input type="hidden" name="idUsuario" value="<?=$_SESSION['id']?>">
                                        <input type="hidden" name="idConteudo" value="<?=$_GET['idConteudo']?>">
                                    </form>
<?php
        }
    }
?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <!-- essa div debaixo fecha a div class row -->
                    </div>
                </div>







<?php
    
    require_once 'footer.php';
?>   
            </section>
        </main>
        
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='modalDocs'>
                <div class="modal-dialog modal-lg">
                    <!--<div>
                        <h3 id='tituloModal'></h3>
                    </div>-->
                    <div class="modal-content">
                        <embed src="" id='embedDoc' name='embedDoc' style="height:85vh; width:85vw; margin-left:-15vw;">
                    </div>
                </div>                
            </div>

    
            <?php
if (isset($_GET['acao']) and $_GET['acao']=="excluir" and isset($_GET['idConteudo'])) {
echo  "	<script>
            $(document).ready(function(){
                $('#deletarConteudoModal').modal('toggle');
            })
        </script>";
?>

<div id="deletarConteudoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method='post' action='../controllers/ExcluirConteudo.php'>
                <div class="modal-header">						
                    <h4 class="modal-title">Deletar Conteúdo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">					
                    <p>Você tem certeza que deseja deletar este conteúdo?</p>
                    <p class="text-warning"><small>Essa ação não pode ser desfeita.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="hidden" name="idConteudo" value="<?=$_GET['idConteudo']?>">
                    <input type="submit" class="btn btn-danger" value="Deletar">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    }
?>

            
            <script>
                $(document).ready(function(){                    
                    var chat = 0;
                    $("#someDuvida").click(function () {
                        $("#colunaComentario").toggleClass("hide");
                        if(chat==0){
                            $("#colunaConteudo").removeClass("col-11");
                            $("#colunaConteudo").addClass("col-7");
                            $("#someDuvida i").removeClass("far fa-eye");
                            $("#someDuvida i").addClass("far fa-eye-slash");
                            chat = 1;
                        }else{
                            $("#colunaConteudo").removeClass("col-7");
                            $("#colunaConteudo").addClass("col-11");
                            $("#someDuvida i").removeClass("far fa-eye-slash");
                            $("#someDuvida i").addClass("far fa-eye");
                            chat = 0;
                        }
                    })
                    $(".modalDoc").click(function(){
                        //console.log($(this).attr('href'));
                        var doc = $(this).attr('href');
                        //var titulo = $(this).text();
                        //$("#embedDoc").attr("src",$(this).attr("href"));
                        $('#modalDocs').modal();
                        $("#embedDoc").attr("src",doc);
                        //$("#tituloModal").text(titulo);
                    })
<?php
                if (isset($_GET['abre']) and $_GET['abre']=='true') {
                    echo '$("#colunaComentario").toggleClass("hide");
                    $("#someDuvida i").removeClass("far fa-eye");
                    $("#someDuvida i").addClass("far fa-eye-slash");';
                }
?>
                })
            </script>
        </body>
    </html>
    