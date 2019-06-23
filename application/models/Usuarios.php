<?php
    require_once "Conexao.php";
    abstract class Usuarios{

        protected $nome;
        private $id;
        protected $email;
        protected $fotoPerfil;
        private $senha;
        public $conexao;


        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }

        abstract public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha);
        abstract public function logar($email, $senha);

    }

