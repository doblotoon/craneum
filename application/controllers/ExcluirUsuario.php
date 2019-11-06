<?php

require "../models/Aluno.php";
require '../models/Professor.php';
    $usuario = new Aluno();

    class ExcluirUsuario {
        public function ExcluirUsuario($idUsuario){
            $this->$usuario->ExcluirUsuario($idUsuario);
        }
    }

    $exclusao = new ExcluirUsuario();
    $exclusao->ExcluirUsuario($_SESSION['id']);
/*
    TODO: Integrar excluir usuário à WEB
*/

/*



    recebe as tags antigas
    recebe as tags atuais

    verifica se tags antigas e atuais sao iguais, se sao nao acontece nada
    se nao esta nas antigas -> verifica se é igual alguma existente, se for pega a id e add em um array
    se nao for -> cria uma nova


    5 tags antigas
    2 atuais nao mudadas

    delete 3 antigas

    faz nada com 2 atuais


*/