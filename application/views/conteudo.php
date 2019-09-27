<?php
    require_once "header.php";
    require_once "../models/Conteudo.php";
    require_once "../models/Comentario.php";
    require_once "../models/Tag.php";

    $idConteudo = (int) $_GET['idConteudo'];
    $conteudo = new Conteudo();
    $conteudoSelecionado = $conteudo->getConteudo($idConteudo);

    $comentario = new Comentario;
    $comentarios = $comentario->getComentario($idConteudo);
    print_r($comentarios);

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
?>
    <body>
        <div class="container">
            <div class="row">

            <div class="col-12">
                    <h3><?=$conteudoSelecionado['titulo']?></h3>
                    <hr class="mb-4">
                    <div>
                        <div class="col-md-6 mb-3 aEsquerda">
                            <h6 class="aEsquerda negrito">Data:</h6>
                        </div>

                        <div class="col-md-6 mb-3 aEsquerda">
                            <h6 class="aEsquerda negrito">Autor(a):</h6>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 aEsquerda">
                        <h6 class="aEsquerda negrito">Disciplina: </h6>
                        <h6 class="aEsquerda"> Disciplina 1</h6>
                    </div>
                    <div class="col-md-12 mb-3">
                        <?=$conteudoSelecionado['conteudo']?>
                    </div>
                    <hr class="mb-4">
                    <div class='col-md-12 mb-3'>
                    <?php
                            //print_r($tags);
                            foreach ($tags as $key => $tag) {
                                $tagNome = $tag['tag'];
                                print('<a href="tag.php?tag={$tagNome}"><span class="badge badge-secondary aEsquerda espacoDireita">'.$tagNome.'</span></h6></a>');
                            }
                        ?>
                    </div>
                </div>

            <!-- COM OS COMENTÁRIOS ABERTOS -->
                <div class="col-8">
                    <h3><?=$conteudoSelecionado['titulo']?></h3>
                    <hr class="mb-4">
                    <div>
                        <div class="col-md-6 mb-3 aEsquerda">
                            <h6 class="aEsquerda negrito">Data:</h6>
                        </div>

                        <div class="col-md-6 mb-3 aEsquerda">
                            <h6 class="aEsquerda negrito">Autor(a):</h6>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 aEsquerda">
                        <h6 class="aEsquerda negrito">Disciplina: </h6>
                        <h6 class="aEsquerda"> Disciplina 1</h6>
                    </div>
                    <div class="col-md-12 mb-3">
                        <?=$conteudoSelecionado['conteudo']?>
                    </div>
                    <hr class="mb-4">
                    <div class='col-md-12 mb-3'>
                    <?php

                            //print_r($tags);
                            foreach ($tags as $key => $tag) {
                                $tagNome = $tag['tag'];
                                print('<a href="tag.php?tag={$tagNome}"><span class="badge badge-secondary aEsquerda espacoDireita">'.$tagNome.'</span></h6></a>');
                            }
                        ?>
                    </div>
                </div>
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
                    <?php
                        //$duvidas[] = ['nomeUsuario'=>"aaaaaa","duvida"=>"nao entendi",'data'=>'07/09/2019']; /// ESTOU AQUI///
                        foreach ($comentarios as $comentario) {
                            echo "<h4>{$comentario['duvida']}</h4>";
                            echo "<p>{$duvida['duvida']}</p>";
                            echo "<hr>";
                            echo "<h6>{$duvida['data']}</h6>";
                        }
                    ?>
                    </div>
                    <div style=''>
                        <?=$precisaLogar?>
                        <textarea id='duvida' class='<?=$displayNone?>'></textarea>
                        <hr>
                        <button class='<?=$displayNone?>'>Enviar duvida</button>
                    </div>
                </div>
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
?>   
