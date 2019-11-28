
<?php
#estrutura da cadastrar comentário
    require "../models/Comentario.php";
    $comentarioObj = new Comentario();
    class cadastrarResposta{
        public function cadastroResposta($comentarioObj){
            $dados = $_POST;
            $comentarioObj->cadastrarResposta($dados);
        }
    }
    $cadastro = new cadastrarResposta();
    $cadastro->cadastroResposta($comentarioObj);
    if (isset($_GET['adendo']) and $_GET['adendo']==1) {
        $redirect = "adendos";
    }else{
        $redirect = "someDuvida";
    }
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['idConteudo']."&abre=true#{$redirect}");