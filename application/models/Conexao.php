<?php


    class Conexao {
        //atributos
        public $connection;
        private function sistema(){
            $sistema = PHP_OS;
            if ($sistema == "WINNT") {
                $dados_banco['usuario']='root';
                $dados_banco['senha']="";
            }else{
                $dados_banco['usuario']='aluno';
                $dados_banco['senha']='aluno';
            }
            return $dados_banco;
        }
        public function __construct() {
            $dados_banco = $this->sistema();
            $usuario = $dados_banco['usuario'];
            $senha = $dados_banco['senha'];
            $this->connection = new PDO("mysql:host=localhost;dbname=craneum;charset=UTF8", $usuario, $senha);
        }
        public function getConexao(){
            return $this->connection;
        }
    }