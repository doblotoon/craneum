|<?php
    require_once "Usuarios.php";

class Aluno extends Usuarios{
    
    public function cadastrar($dadosRecebidos){
        $idUsuario = $dadosRecebidos['idUsuario'];
        $email = $dadosRecebidos['email'];
        $senha = $dadosRecebidos['senha'];
        $confirmarSenha = $dadosRecebidos['confirmaSenha'];
        $query_email = "select nome from usuario where email = '{$email}';";
        $linhas_email = $this->conexao->query($query_email);
        if ($linhas_email->rowCount()==0) {
            if($senha == $confirmarSenha){
                $queryColunas = '';
                $queryDados = '';
                $query = "insert into usuario (";
                $cont = 1;
                unset($dadosRecebidos['confirmaSenha']);
                //print_r($dadosRecebidos);
                foreach ($dadosRecebidos as $colunas => $valores) {
                    //echo $colunas."</br>";
                //    echo $valores."</br>";
                    if ($cont==sizeof($dadosRecebidos)) {
                        $queryColunas = $queryColunas."{$colunas},fk_usu_idTipoUsuario) values("; 
                        if (strlen($idUsuario)==7) {
                            $queryDados = $queryDados."'{$valores}',2);";
                        }elseif (strlen($idUsuario)>7 && strlen($idUsuario)<=10) {
                            $queryDados = $queryDados."'{$valores}',1);";
                        }
                        
                        //echo $valores."</br>";
                    }else{
                        
                        if ($colunas=="senha") {
                            $valores = password_hash($valores,PASSWORD_DEFAULT);
                        }
                        $queryColunas = $queryColunas."{$colunas},";
                        //echo $colunas;
                        if (is_int($valores)) {
                            $queryDados = $queryDados."{$valores},";
                        }else{
                            $queryDados = $queryDados."'{$valores}',";
                        }
                        
                    }
                    $cont++;
                }
                //echo $queryColunas;
            }else{
                echo "Senha errada \n";
               header('Location: CadastroUsuario.php?err=2');
            }
        }else{
            echo "Email errado\n";
            //header('Location: CadastroUsuario.php?err=1');
        }
        try {
            $queryCompleta = $query.$queryColunas.$queryDados;
            //echo $queryCompleta;
            $this->conexao->exec($queryCompleta);
            //header('Location: ../views/login.php');
        } catch (PDOException $e) {
            echo $e;
        }
    }

    ///$senha = password_hash($senha, PASSWORD_DEFAULT);
                
    //$query = "insert into usuario (idUsuario,nome,email,senha,fotoPerfil,fk_usu_idTipoUsuario) values ({$id},'{$nome}','{$email}','{$senha}','{$fotoPerfil}',1)";
    //$this->conexao->exec($query);
    //echo "foi\n";
    /*public function mostraSoUmUsuario(){
        return $this->mostrarUsuarios($this->conexao->lastInsertId());
    }*/
   
    
}

$aluno = new Aluno();

//$aluno->logar("odeioprog@gmail.com","123456");


//$aluno->cadastrar("aaaaaaaaaaaaaa","odeioprog@gmail.com","teste.jpeg",20133145,"123456","123456");
/*print_r($aluno->mostraSoUmUsuario());*/
//print_r($aluno->logar("pgabiattiguardini@gmail.com",0));