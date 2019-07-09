|<?php
require_once "Usuarios.php";

class Aluno extends Usuarios{
    
    public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha){
        $query_email = "select nome from usuario where email = '{$email}';";
        $linhas_email = $this->conexao->query($query_email);
        if ($linhas_email->rowCount()==0) {
            if($senha == $confirmarSenha){

                $senha = password_hash($senha, PASSWORD_DEFAULT);
                
                $query = "insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values ({$id},'{$nome}','{$email}','{$senha}','{$fotoPerfil}',1)";
                $this->conexao->exec($query);
                echo "foi\n";
            }else{
                echo "Senha errada \n";
               //header('Location: CadastroUsuario.php?err=2');
            }
        }else{
            echo "Email errado\n";
            //header('Location: CadastroUsuario.php?err=1');
        }
    }


    /*public function mostraSoUmUsuario(){
        return $this->mostrarUsuarios($this->conexao->lastInsertId());
    }*/
   
    
}
$aluno = new Aluno;
//$dados = array('nome' => "Paxiguera","senha"=>"beijar aquela boquinha comunista","email"=>"aaaa@gmail");
//$aluno->EditarUsuario(4,$dados);

/*$aluno->cadastrar("asdgjkg","abasasgasard@gmail.com","nada.jpeg",890,"senha","senha");
print_r($aluno->mostraSoUmUsuario());*/
//print_r($aluno->logar("pgabiattiguardini@gmail.com",0));