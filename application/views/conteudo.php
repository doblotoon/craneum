<?php
    require_once "head.php";
    require_once "../models/Conteudo.php";
    require_once "../models/Comentario.php";
    require_once "../models/Tag.php";
    require_once "../models/Disciplina.php";

    $idConteudo = (int) $_GET['idConteudo'];
    $conteudo = new Conteudo();
    $conteudoSelecionado = $conteudo->getConteudo($idConteudo);

    $comentario = new Comentario;
    $comentarios = $comentario->getComentario($idConteudo);
   

    $tag = new Tag();
    $tags = $tag->getTagsConteudo($conteudoSelecionado['idConteudo']);

    if (!$login) {
        $precisaLogar = "<div class='alert alert-primary' role='alert'>
        Para cadastrar uma dúvida você precisa estar logado. <a href='login.php?conteudo={$idConteudo}'>Clique aqui</a> para se logar.
      </div>";
        $displayNone = "hide";
    }else{
        $precisaLogar = '';
        $displayNone = '';
    }

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
      background: radial-gradient(circle, rgba(0,0,0,0.09653368183210786) 35%, rgba(0,14,17,0.6287465669861695) 100%), url('../assets/images/login.png');
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
    <main class='wrapper'>
    ";

    require_once "menu.php";
    
?>


  <section class="section parallax bg1 tituloConteudo">
  <h1><?=$conteudoSelecionado['titulo']?></h1>
  <h4 id="infoConteudo">Postado por <?=$conteudoSelecionado['nome']?> em <?=$conteudoSelecionado['dataPostagem']?></h4>
  </section>

  <section class="section static">
  <div class="container">
            <div class="row">

            <div class="col-11"> <!-- COM OS COMENTÁRIOS ABERTOS: col-8 !-->
                    <div class="col-md-12 mb-3 aEsquerda">
                        <h6 class="aEsquerda negrito">Disciplina(s): </h6>
                        <h6 class="aEsquerda"><a href="tag.php?tag={$tagNome}"><span class="badge badge-secondary aEsquerda espacoDireita">Sociologia</span></h6></a>
                    </div>
                    <hr class="mb-4">
                    <div class="col-md-12 mb-3">
                        <?=$conteudoSelecionado['conteudo']?>
                    </div>
                    <hr class="mb-4">
                    <div class='col-md-12 mb-3'>
                    <h2 class="aEsquerda negrito">Dúvidas: </h2>
                    <?php
                            //print_r($tags);
                            foreach ($tags as $key => $tag) {
                                $tagNome = $tag['tag'];
                                print('<a href="tag.php?tag={$tagNome}"><span class="badge badge-secondary aEsquerda espacoDireita">'.$tagNome.'</span></h6></a>');
                            }
                        ?>
                    </div>
                </div>

                <!-- COM OS COMENTÁRIOS ABERTOS O BOTÃO FICA DENTRO DE UMA DIV ASSIM:

                <div class="col-4">
                <button id='someDuvida'>
                    <i class="material-icons">speaker_notes_off</i>
                </button>
                <div id='divDuvida'>
                    <div style='overflow:scroll;height:70%;'>
                    <h2 style='text-align:center;'>Dúvidas</h2>
                    <br>
                    <br>
                    <hr>
                    -->
                    <div id='divDuvida' class='hide'>
                    <?php
                        
                        //$duvidas[] = ['nomeUsuario'=>"aaaaaa","duvida"=>"nao entendi",'data'=>'07/09/2019']; /// ESTOU AQUI///
                        foreach ($comentarios as $duvida) {
                            //$a=$comentarios->trocaIDporNome($duvida['fk_duv_idUsuario']);
                            //print_r("<pre>$duvida</pre>");
                            echo "<h6>{$duvida['dataDuvida']}</h6>";
                            echo "<h4>{$duvida['duvida']}</h4>";
                            echo "<p>{$a}</p>";
                            echo "<hr>";
                            if ($duvida['idUsuario']==$_SESSION['id']) {
                                echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=excluir&idDuvida={$duvida['idDuvida']}'><button class='btn-danger'>excluir</button></a>";
                                echo "<a href='?idConteudo={$_GET['idConteudo']}&acao=editar&idDuvida={$duvida['idDuvida']}'><button class='btn-primary'>editar</button></a>";
                            }
                            //echo "<button></button>";
                        }
                        if ($_GET['acao']=="excluir") {//acho que isso vai para a controller
                            $a = $comentario->deletarComentario($_GET['idDuvida']);
                        }
                    ?>
                    </div>
                    <!--
                    </div>
                    <div style=''>
                        <?=$precisaLogar?>
                        <textarea id='duvida' class='<?=$displayNone?>'></textarea>
                        <hr>
                        <button class='<?=$displayNone?>'>Enviar duvida</button>
                    </div>
                </div>
        <style>
            .hide{
                display:none;
            }
            .containerGrande{
                width:60% !important;
                margin-left:20% !important;
            }
            .containerPequeno{
                width:20% !important;
                margin:0 !important;
            }
        </style>
        <div>
            <div></div>

            </div>
        </div>
    


        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id='modalDocs'>
        <div class="modal-dialog modal-lg">
            <div>
                <h3 id='tituloModal'></h3>
            </div>
            <div class="modal-content" style='height:80%;'>
                <embed src="" id='embedDoc' name='embedDoc' style="height:100%;">
            </div>

                -->
                <div class="col-md-1 mb-3 aEsquerda fixed">
                <button type="button" id='someDuvida' class="btn btn-secondary"><i class="material-icons">speaker_notes_off</i></button> <!-- COM OS COMENTÁRIOS ABERTOS O ICON MUDA PARA fa-eye-slash e o texto vira fechar comentarios -->
                </div>


    
        </div>
        </div>


        <script>
            $(document).ready(function(){
                var chat = 0;
                $("#someDuvida").click(function () {
                    $("#divDuvida").toggleClass("hide");
                    $("#containerConteudo").toggleClass("containerGrande");
                    $("#containerDuvida").toggleClass("containerPequeno");
                    if(chat==0){
                        $("#someDuvida i").text("speaker_notes");
                        chat = 1;
                    }else{
                        $("#someDuvida i").text("speaker_notes_off");
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

<?php
    require_once 'footer.php';
    print_r($_SESSION);
    echo "<br><br><br>";
    print_r($comentarios);
?>   

  </section>

</main>