<?php


    class Conexao {
        //atributos
        public $connection;
        public function __construct() {
            $this->connection = new PDO("mysql:host=localhost;dbname=craneum;", "aluno","aluno");
        }
        public function getConexao(){
            return $this->connection;
        }
    }