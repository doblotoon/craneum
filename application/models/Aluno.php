<?php
require_once "Usuarios.php";

class Aluno extends Usuarios{

    public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha){

        if($senha == $confirmarSenha){
            


        }else{
            header('Location: CadastroUsuario');
        }
    }
}
