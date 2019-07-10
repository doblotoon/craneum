<?php
	require "../models/Aluno.php";
	require '../models/Professor.php';

class CadastroUsuario {

	public function cadastrarUsuario($dadosEnviados){
		$dadosEnviados= $_POST;
		print_r($dadosEnviados);
		//cadastrar($dadosEnviados);
	}

}

cadastrarUsuario();