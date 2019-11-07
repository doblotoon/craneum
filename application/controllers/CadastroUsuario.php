	<?php
	require "../models/Usuario.php";
	//require '../models/Professor.php';
	$usuario = new Aluno;
	class CadastroUsuario {

		public function cadastrarUsuario($usuario){
			//$usuario->cadastrarUsuario();
			$fotoPerfil = $this->salvarFoto();
			$dadosEnviados = $_POST;
			$dadosEnviados['fotoPerfil'] = $fotoPerfil;
			//print_r($dadosEnviados);
			//print_r($_FILES);
			$usuario->cadastrar($dadosEnviados);
		}
		public function salvarFoto(){
			$foto = $_FILES['fotoPerfil'];
			$destino_foto = "../assets/images/usuarios/";

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

	$cadastro = new CadastroUsuario();
	$cadastro->cadastrarUsuario($usuario);