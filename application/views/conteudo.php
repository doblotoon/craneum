<?php
    require_once "header.php";
    require_once "../models/Conteudo.php";
    require_once "../models/Tag.php";

    $idConteudo = (int) $_GET['idConteudo'];
    $conteudo = new Conteudo();
    $conteudoSelecionado = $conteudo->getConteudo($idConteudo);

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
        <div style='margin-left:10%;width:60%;float:left;' id='containerConteudo'>
            <h1 style='text-align:center;'>
                <?=$conteudoSelecionado['titulo']?>
                <h4>
                    Tags:
                    <?php
                        //print_r($tags);
                        foreach ($tags as $key => $tag) {
                            $tagNome = $tag['tag'];
                            echo "<a href='tag.php?tag={$tagNome}'>
                                    <span style='background-color:lightblue !important;margin:5px;padding:2px; border-radius:5px;'>".$tagNome."</span>
                                  </a>";
                        }
                    ?>
                </h4>
            </h1>
            <hr>
            <div>
                <?=$conteudoSelecionado['conteudo']?>
            </div>
        </div>
        <div style='float:left;width:25%;margin-left:5%;' id='containerDuvida'>
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
                    $duvidas[] = ['nomeUsuario'=>"aaaaaa","duvida"=>"nao entendi",'data'=>'07/09/2019'];
                    foreach ($duvidas as $key => $duvida) {
                        echo "<h4>{$duvida['nomeUsuario']}</h4>";
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
        })
    </script>