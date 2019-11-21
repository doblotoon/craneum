
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
    
    header("Location: ../views/conteudo.php?idConteudo=".$_POST['idConteudo']."&abre=true#someDuvida");