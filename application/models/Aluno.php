|<?php
require_once "Usuarios.php";

class Aluno extends Usuarios{
    
    public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha){
        
        if($senha == $confirmarSenha){

            $senha = password_hash($senha, PASSWORD_DEFAULT);
            
            $query = "insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values ({$id},{$nome},{$email},{$senha},{$fotoPerfil},1)";
            //$this->conexao;
        }else{
            header('Location: CadastroUsuario.php?err=1');
        }
    }

    public function logar($email, $senha){

        $emailQ;//aqui tem que vir a query do email
        $senhaQ; //aqui tem que vir a query da senha

        if($email == $emailQ && $senha == $senhaQ){
            //oqq acontece se o cara logar?
        }else{
            header('Location: Login?err=2');
        }
    }
    
}
$aluno = new Aluno;

print_r($aluno->conexao);