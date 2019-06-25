<?php
    require_once "Conexao.php";
    abstract class Usuarios{

        protected $nome;
        private $id;
        protected $email;
        protected $fotoPerfil;
        private $senha;
        public $conexao;


        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }

        abstract public function cadastrar($nome, $email, $fotoPerfil, $id, $senha, $confirmarSenha);

        public function logar($email, $senha){

            $senha_hash = $senha;
            
            try {
                $query = "select idUsuario,email,senha from usuario where email = '{$email}';";
                $linhas = $this->conexao->query($query);
    
                echo "caiu no try\n";
    
                if ($linhas->rowCount()>0) {
                    $dadosUsuario = $linhas->fetch(PDO::FETCH_OBJ);
                    $senha_retornada = $dadosUsuario->senha;
                    echo "contou\n";
                    if ($senha_retornada == $senha_hash) {
                        echo "senha é :  {$senha_retornada}\n";
                        echo "LOGOU CARALHO\n";
                    }
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
    
            
            $linhas_login = $this->conexao->query($query)->fetch(PDO::FETCH_BOUND);
    
            
            //return $login;
            /*$emailQ;//aqui tem que vir a query do email
            $senhaQ; //aqui tem que vir a query da senha
    
            if($email == $emailQ && $senha == $senhaQ){
                //oqq acontece se o cara logar?
            }else{
                header('Location: Login?err=2');
            }*/
        }

        public function ExcluirUsuario($username){

            try {
                $query = "delete from usuario where idUsuario = {$username}";
                $linhas = $this->conexao->query($query);

                echo "caiu no try\n";

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

    }
