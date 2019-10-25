<?php

    /* REQUISIÇÕES */

    require_once "head.php";
    require_once "../models/Conteudo.php";
    require_once "../models/Comentario.php";
    require_once "../models/Tag.php";
    require_once "../models/Disciplina.php";

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
    print_r($comentarios[$_GET['idDuvida']]);
    //print("<pre>");
    //print_r($comentarios);
    //print("</pre>");
    $tag = new Tag();
    $tags = $tag->getTagsConteudo($conteudoSelecionado['idConteudo']);
    $disciplina = new Disciplina();
    $disciplinas = $disciplina->getDisciplinasConteudo($conteudoSelecionado['idConteudo']);
    
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
    
    /* Sets the actual background images to adorable kitties. This part is crucial. */
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
                        echo '<button class="btn btn-light espacoSalvar"><i class="fas fa-bookmark"></i> Salvar</button>';
                    } elseif(isset($_SESSION['id']) && $conteudoSelecionado['idUsuario']!=$_SESSION['id']){
                        echo'<button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</button>';
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
                                    
                        <div class="col-11 card" id='colunaConteudo'>
                            <br>
                            <div class="col-md-12 mb-3" style="min-height:120px;">
                                <?=$conteudoSelecionado['conteudo']?>
                            </div>
                            <hr class="mb-4">  
                        </div>
            
                        <!-- BOTAO DUVIDA -->
                        <div class='col-1'>
                            <button type="button" id='someDuvida' class="btn btn-secondary botaoDuvida">
                                <i class="far fa-eye"></i>
                            </button> <!-- COM OS COMENTÁRIOS ABERTOS O ICON MUDA PARA fa-eye-slash e o texto vira fechar comentarios -->
                        </div>
                    <!-- não vou me preocupar agora mas aqui está quebrando o css-->
                        <div class="row">
                            <div class="col-8"> <h2 class="font-weight-bold">Adendos:</h2> 
                            <br>
                            <?php
                               
                                foreach ($comentarios as $duvida) {
                                    if ($duvida['adendo'] == 1) {
                                                                                
                                        //print_r("<pre>$duvida</pre>");
                                        
                                        echo " <span id='".$duvida['idDuvida']."'>";
                                        echo "<h6>{$duvida['dataDuvida']}</h6>";
                                        echo "<h4>{$duvida['duvida']}</h4>";
                                        //echo "<p>{$a}</p>";
                                        if(isset($_SESSION['id'])){
                                            if ($duvida['idUsuario']==$_SESSION['id']) {
                                                echo "<form action='../controllers/ExcluirComentario.php' method='post'> <input class='btn-danger' type='submit' value='excluir'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
                                                echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}'><button class='btn-primary '>editar</button></a>";
                                            }
                                        }
                                        if ($_SESSION['tipo']="professor") {
                                            echo "<form action='../controllers/TransformaComentario.php' method='post'> <input class='btn-dark' type='submit' value='transformar em comentário novamente'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'> <input type='hidden' name='funcao' value=0> </form>";   

                                        }

                                        echo "<hr>";
                                        echo "</span>";
                                    }
                                }
                                
                            ?>
                            <div class="clear"></div>
                            </div>
                        </div>
                    <!-- não vou me preocupar agora mas aqui está quebrando o css-->
                        <!-- DIV DOS COMENTÁRIOS -->
                        <div class="col-3 hide" id='colunaComentario'>
                            <h2 class="aEsquerda negrito">Dúvidas: </h2>
                            <br><br>

                            <!-- COMENTÁRIOS LISTADOS -->
<?php
                            //print_r($comentarios);
                            //$duvidas[] = ['nomeUsuario'=>"aaaaaa","duvida"=>"nao entendi",'data'=>'07/09/2019']; /// ESTOU AQUI///
                            if (empty($comentarios)) {
                                echo "<h5> Não há nenhuma dúvida cadastrada";
                                echo "<hr>";
                            } else {
                                foreach ($comentarios as $duvida) {
                                    if ($duvida['adendo'] == 0) {
                                        
                                        //$a=$comentarios->trocaIDporNome($duvida['fk_duv_idUsuario']);
                                        //print_r("<pre>$duvida</pre>");
                                        echo "<span id='".$duvida['idDuvida']."'>";
                                        echo "<h6>{$duvida['dataDuvida']}</h6>";
                                        echo "<h4>{$duvida['duvida']}</h4>";
                                        //echo "<p>{$a}</p>";
                                        if(isset($_SESSION['id'])){
                                            if ($duvida['idUsuario']==$_SESSION['id']) {
                                                echo "<form action='../controllers/ExcluirComentario.php' method='post'> <input class='btn-danger' type='submit' value='excluir'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'></form>";   
                                                echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}'><button class='btn-primary '>editar</button></a>";
                                            }
                                            if ($_SESSION['tipo']="professor") {
                                                echo "<form action='../controllers/TransformaComentario.php' method='post'> <input class='btn-dark' type='submit' value='transformar em adendo'> <input type='hidden' name='id' value='{$_GET['idConteudo']}'> <input type='hidden' name='idDuvida' value='{$duvida['idDuvida']}'> <input type='hidden' name='funcao' value=1> </form>";   

                                            }
                                            
                                        }

                                        echo "<hr>";
                                        echo "</span>";
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
                                    }  
                                    //$ex = ;
                                }   
?>

                                <form action="../controllers/EditarComentario.php" method="post">
                                    <textarea name="duvidaAtual" id="" cols="30" rows="5"><?php print($ex['duvida']);?></textarea>
                                    <button class="btn btn-primary" type="submit">Comentar Dúvida Editada</button>
                                    <input type="hidden" name="id" value="<?=$_GET['idConteudo']?>">
                                    <input type="hidden" name="idDuvida" value="<?=$_GET['idDuvida']?>">
                                    
                                </form>
                                
<?php
                        //print_r($comentarios);
                            } else {
?>
                                <form action="../controllers/CadastrarComentario.php" method="post" class="">
                                    <textarea name="duvida" id="" cols="30" rows="5"></textarea>    
                                    <button class="btn btn-primary" type="submit">Comentar Dúvida</button>
                                    <input type="hidden" name="idUsuario" value="<?=$_SESSION['id']?>">
                                    <input type="hidden" name="idConteudo" value="<?=$_GET['idConteudo']?>">
                                </form>
<?php
                                }
                                
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
?>
    
                        <!--<div style=''> esse é o botao do guardini que nao funciona, que segundo ele vai ter ajax pra ele
                            <?php //print($precisaLogar)?>
                            <textarea id='duvida' cols="30" rows="5" class='<?php //print($displayNone)?>'></textarea>
                            <hr>
                            <button class='<?php //print($displayNone)?> btn btn-primary'>Comentar Dúvida</button>
                        </div>-->
                        </div>
                        
                        <div class='col-md-12 mb-3 fixed'>
                            <br>
                            <h6 class="aEsquerda negrito">Tags: </h6>
<?php
                            //print_r($tags);
                            foreach ($tags as $key => $tag) {
                                $tagNome = $tag['tag'];
                                echo '<a href="resultadoPesquisar.php?termoPesquisado='.$tagNome.'"><span class="badge badge-secondary aEsquerda espacoDireita tag">'.$tagNome.'</span></h6></a>';
                            }
?>
                        </div>
                    <!-- essa div debaixo fecha a div class row -->
                    </div>
                </div>
<?php
    require_once 'footer.php'; //height do .section: auto...
    //print_r($_SESSION);
   // echo "<br><br><br>";
   // print_r($comentarios);
?>   
                <script>
                    $(document).ready(function(){
                        var chat = 0;
                        $("#someDuvida").click(function () {
                            $("#colunaComentario").toggleClass("hide");
                            //alert("A");
                            if(chat==0){
                                $("#colunaConteudo").removeClass("col-11");
                                $("#colunaConteudo").addClass("col-8");
                                $("#someDuvida i").removeClass("far fa-eye");
                                $("#someDuvida i").addClass("far fa-eye-slash");
                                
                                chat = 1;
                            }else{
                                $("#colunaConteudo").removeClass("col-8");
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
                        $(".comentarioEdita").click(function(){
                            //console.log($(this).attr('href'));
                            //var doc = $(this).attr('href');
                            //var titulo = $(this).text();
                            //$("#embedDoc").attr("src",$(this).attr("href"));
                            $('#modalComentario').modal();
                            //$("#embedDoc").attr("src",doc);
                            //$("#tituloModal").text(titulo);
                        })
                    })
                </script>

            </section>
        </main>
        
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='modalDocs'>
            
            <div class="modal-dialog modal-lg">
                <div>
                    <h3 id='tituloModal'></h3>
                </div>
                <div class="modal-content" style='height:80%;'>
                    <embed src="" id='embedDoc' name='embedDoc' style="height:100%;">
                </div>
            </div>

            <!-- modal comentario -->
            <div class="modal" tabindex="-1" role="dialog" id='modalComentario'>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Título do modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Texto do corpo do modal, é aqui.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Salvar mudanças</button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
    