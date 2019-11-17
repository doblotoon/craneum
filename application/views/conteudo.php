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
                    if (isset($_SESSION['id']) && $conteudoSelecionado['idUsuario']!=$_SESSION['id']){
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
                    
                    if(isset($_SESSION['id']) && $conteudoSelecionado['idUsuario']==$_SESSION['id']){
?>
                        <div class="espacoSuperiorBotoesConteudoProf">
                            <a href="editarConteudo.php?idConteudo=<?=$conteudoSelecionado['idConteudo']?>"><button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</button></a>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</button>
                        </div>
<?php                   
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
                                    echo '<a href="resultadoPesquisar.php?termoPesquisado='.$disciplina['disciplina'].'">
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
<?php

    foreach($comentarios as $duvida){
        if($duvida['adendo']==1){
            print("<h3 class='text-center tituloAdendo'>Adendo(s)</h3>");
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

if(isset($_SESSION['id'])){
    if ($duvida['idUsuario']==$_SESSION['id']) {
        echo "<form action='../controllers/ExcluirComentario.php' method='post'> <input class='btn btn-sm btn-danger espacoDireitoBotaoComentarios' type='submit' value='Excluir'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
        echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}'><button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'>Editar</button></a>";
    }
    if ($_SESSION['tipo']=="professor") {
        echo "<form action='../controllers/TransformaComentario.php' method='post'> <input class='btn btn-sm btn-dark' type='submit' value='Tornar Comentário'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'> <input type='hidden' name='funcao' value=1> </form>";   
    }
}

?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>          
<?php
                echo "<hr>";
                echo "</span>";
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
                                echo '<h5><a href="resultadoPesquisar.php?termoPesquisado='.$tagNome.'"><span class="badge badge-secondary aEsquerda espacoDireita tag">'.$tagNome.'</span></h5></a>';
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
    if (empty($comentarios)) {
        echo "<h5> Não há nenhuma dúvida cadastrada";
        echo "<hr>";
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
                                            <li class="media">
                                                <img src="<?=$duvida['fotoPerfil']?>" alt="" class="img-circle">
                                                <div class="media-body">
                                                    <strong class="nomeUsuarioComentario"><?=$duvida['nome']?></strong><p> em <?= date("d/m/Y", strtotime($duvida['dataDuvida']))?></p>
                                                    <p>
                                                        <?=$duvida['duvida']?> 
                                                    </p>
                                                </div>
<?php
                                                #<!-- inicio da getResposta-->#

                                                #print_r($duvida);
                                                print_r ($respostas);
                                                #if ($duvida['idDuvida']== $duvida['resposta'][]) {
                                                #    # code...
                                                #}

                                                #<!-- final da getResposta-->#


                if (isset($_SESSION['id']) and $_SESSION['id'] == $conteudoSelecionado['idUsuario']) {
                    echo "<a href='?idConteudo={$_GET['idConteudo']}&rc=1'>responder dúvida</a>";
                }
                if (isset($_GET['rc'])) {

                    if ( $_GET['rc']==1) {
                        echo"
                            <form action='../controllers/CadastrarComentario.php' method='post' class=''>
                                        <textarea class='form-control' name='duvida' placeholder='Escreva um comentário' rows='4'></textarea>
                                        <button class='btn btn-primary espacoSuperiorComentarDuvida' type='submit'>Comentar Resposta</button>
                                        <input type='hidden' name='idUsuario' value='{$_SESSION['id']}'>
                                        <input type='hidden' name='idConteudo' value='{$_GET['idConteudo']}'>
                            </form>";
                    }
                }

                if(isset($_SESSION['id'])){
                    if ($duvida['idUsuario']==$_SESSION['id']) {
                        echo "<form action='../controllers/ExcluirComentario.php' method='post'> <input class='btn btn-sm btn-danger espacoDireitoBotaoComentarios' type='submit' value='Excluir'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
                        echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}'><button class='btn btn-sm btn-primary espacoDireitoBotaoComentarios'>Editar</button></a>";
                    }
                    if ($_SESSION['tipo']="professor") {
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
                    print_r($_POST);
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
                            print_r($_POST);
                        //} catch (PDOException $e) {
                        //   echo $e->getMessage();
                    // }
                        
                    }
                }
            }  
            //$ex = ;
        }
?>

</ul>
                                <form action="../controllers/EditarComentario.php" method="post">
                                    <textarea class="form-control" name="duvidaAtual" id="" rows="4"><?php print($ex['duvida']);?></textarea>
                                    <button class="btn btn-primary espacoSuperiorComentarDuvida" type="submit">Comentar Dúvida Editada</button>
                                    <input type="hidden" name="id" value="<?=$_GET['idConteudo']?>">
                                    <input type="hidden" name="idDuvida" value="<?=$_GET['idDuvida']?>">
                                    
                                </form>

<?php

    } else {
    ?>
                                    <form action="../controllers/CadastrarComentario.php" method="post" class="">
                                        <textarea class="form-control" name="duvida" placeholder="Escreva um comentário" rows="4"></textarea>
                                        <button class="btn btn-primary espacoSuperiorComentarDuvida" type="submit">Comentar Dúvida</button>
                                        <input type="hidden" name="idUsuario" value="<?=$_SESSION['id']?>">
                                        <input type="hidden" name="idConteudo" value="<?=$_GET['idConteudo']?>">
                                    </form>
<?php
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
                    <div>
                        <h3 id='tituloModal'></h3>
                    </div>
                    <div class="modal-content">
                        <embed src="" id='embedDoc' name='embedDoc' style="height:90vh; width:65vw; margin-left:-5vw;">
                    </div>
                </div>                
            </div>

            
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
                        var titulo = $(this).text();
                        //$("#embedDoc").attr("src",$(this).attr("href"));
                        $('#modalDocs').modal();
                        $("#embedDoc").attr("src",doc);
                        $("#tituloModal").text(titulo);
                    })
                })
            </script>

        </body>
    </html>
    