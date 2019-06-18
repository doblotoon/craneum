|<?php
require_once "Usuarios.php";

class Aluno extends Usuarios{
    
    public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha){
        
        if($senha == $confirmarSenha){

            $senha = password_hash($senha);
            
            $query = "insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values ({{$id}},{{$nome}},{{$email}},{{$senha}},{{$fotoPerfil}},1)";
            //$this->conexao;
        }else{
            header('Location: CadastroUsuario.php?err=1');
        }
    }
}
$aluno = new Aluno;

print_r($aluno->conexao);