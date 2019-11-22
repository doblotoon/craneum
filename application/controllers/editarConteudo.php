<?php
    require "../models/Conteudo.php";
    require "../controllers/CadastroTag.php";
    require "../controllers/CadastroDisciplina.php";
    require "../views/head.php";
    //print_r($_SESSION);
    $conteudo = new Conteudo();
    $tag = new cadastroTag();
    $disciplina = new cadastroDisciplina();
    
    class atualizarConteudo{
        public function editarConteudo($conteudo,$tag,$disciplina){
            $dadosEnviados = $_POST;
            
            if(!empty($_FILES['fotoCapa']['tmp_name'])){
                $fotoCapa = $this->salvarCapa();
                $dadosEnviados['fotoCapa'] = $fotoCapa;
            } else {
                $capaAntiga = $conteudo->pegaFotoAntiga((int)$dadosEnviados['idConteudo']);
                $dadosEnviados['fotoCapa'] = $capaAntiga;
            }

            //print_r($dadosEnviados);
            $dadosEnviados['idUsuario'] = $_SESSION['id'];
            $ultimaId = $conteudo->editarConteudo($dadosEnviados);
            //pegar a id do conteudo salvo para passar pra tag
            $tag->atualizarTag($ultimaId);
            $disciplina->atualizarDisciplina($ultimaId);
            //echo $capaAntiga;
            header("Location: ../views/conteudo.php?idConteudo=".$dadosEnviados['idConteudo']);
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
    $atualizar = new atualizarConteudo();
    $atualizar->editarConteudo($conteudo,$tag,$disciplina);
    
    //print_r($_POST);
    //echo $_POST['tags'];
?>