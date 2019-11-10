<?php

    require_once "../models/Usuario.php";

    class salvaConteudo{
        public $usuarioClasse;

        public function __construct(){
            $this->usuarioClasse = new Aluno();
        }
        public function salva($idUsuario,$idConteudo){
            $this->usuarioClasse->salvarConteudo($idUsuario,$idConteudo);
            //header("Location: views/conteudo.php?idConteudo={$idConteudo}&salvo=1");            
        }
    }

    if (isset($_GET['acao'])) {
        switch ($_GET['acao']) {
            case 'salvar':
                echo "<script> alert('salvo')</script>";
                break;
            
            case 'remover':
                echo "<script> alert('removido')</script>";
                break;
        }
    }