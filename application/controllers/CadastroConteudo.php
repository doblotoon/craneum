<?php
    //$_POST['texto']=str_replace(".pdf\">",".pdf\" target='mostra'>",$_POST['texto']);
    //echo $_POST['texto'];
    require "../models/Conteudo.php";
    require "../controllers/cadastroTag.php";
   // print_r($_POST);
    $conteudo = new Conteudo();
    $tag = new cadastroTag();
    class cadastroConteudo{
        public function cadastrarConteudo($conteudo,$tag){
            $fotoCapa = $this->salvarCapa();
            $dadosEnviados = $_POST;
            $dadosEnviados['fotoCapa'] = $fotoCapa;
            $ultimaId = $conteudo->cadastroConteudo($dadosEnviados);
            //pegar a id do conteudo salvo para passar pra tag
            $tag->cadastrarTag($ultimaId['idConteudo']);
            
        }
        public function salvarCapa(){
			$foto = $_FILES['fotoCapa'];
			$destino_foto = "../assets/images/capas/";

			$data = date('dmYHis');
			$nomeExplodido= explode('.', $foto['name']);
			$extensao= end($nomeExplodido);
			$nomeSemEspaco= str_replace(' ','',$nomeExplodido[0]);
			$nomeFoto= $nomeSemEspaco.$data.".".$extensao;
			$arquivoFinal = $destino_foto.$nomeFoto;
			$origem= $foto['tmp_name'];
			$enviada= move_uploaded_file($origem, $arquivoFinal);
			//$caminho = $nomeFoto;
			$caminho = $arquivoFinal;

			return $caminho;
        }
    }
    $cadastro = new cadastroConteudo();
    $cadastro->cadastrarConteudo($conteudo,$tag);
    //print_r($_POST);
    //echo $_POST['tags'];
?>
<!--<iframe name='mostra' frameborder="0">-->