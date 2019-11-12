<?php

    require_once "../models/Usuario.php";

    class salvaConteudo{
        public $usuarioClasse;

        public function __construct(){
            $this->usuarioClasse = new Aluno();
        }
        public function salva($idUsuario,$idConteudo){
            $this->usuarioClasse->salvarConteudo($idUsuario,$idConteudo);
            header("Location: ../views/conteudo.php?idConteudo={$idConteudo}&salvo=1");            
        }
        public function remove($idUsuario,$idConteudo){
            $this->usuarioClasse->removerSalvo($idUsuario,$idConteudo);
            header("Location: ../views/conteudo.php?idConteudo={$idConteudo}&salvo=0");            
        }
    }

    $salvar = new salvaConteudo();
    $idUsuario = $_GET['idUsuario'];
    $idConteudo = $_GET['idConteudo'];

    if (isset($_GET['acao'])) {
        switch ($_GET['acao']) {
            case 'salvar':

                $salvar->salva($idUsuario,$idConteudo);

                //echo "<script> alert('salvo')</script>";

                break;
            
            case 'remover':

                $salvar->remove($idUsuario,$idConteudo);
                //echo "<script> alert('removido')</script>";
                break;
        }
    }