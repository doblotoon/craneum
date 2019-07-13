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

        abstract public function cadastrar($dadosRecebidos);

        public function logar($email, $senha){
            try {
                $query = "select idUsuario,email,senha from usuario where email = '{$email}';";
                $linhas = $this->conexao->query($query);
    
                //echo "caiu no try\n";
    
                if ($linhas->rowCount()>0) {
                    $dadosUsuario = $linhas->fetch(PDO::FETCH_OBJ);
                    $senha_retornada = $dadosUsuario->senha;
                    //echo "contou\n";
                    //echo $dadosUsuario->email;
                    //echo $senha_retornada."\n";
                    if (password_verify($senha,$senha_retornada)) {
                        //echo "senha é :  {$senha_retornada}\n";
                        //echo "LOGOU CARALHO\n";
                        //print_r($dadosUsuario);
                        $id = $dadosUsuario->idUsuario;
                        $this->setUsuario($id);         
                        
                        return "sucesso";
                    }else{
                        return "err2";
                    }
                }else{
                    return "err1";
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

       

        public function ExcluirUsuario($idUser){

            try {
                $query = "delete from usuario where idUsuario = {$idUser}";
                $linhas = $this->conexao->exec($query);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function EditarUsuario($idUsuario,array $dadosAtualizados, array $dadosOriginais){
            //print_r($dados);
            $queryDinamica = " ";
            $queryWhere = "where idUsuario = {$idUsuario};";
            $cont=1;
            $ultPosicao = sizeof($dadosAtualizados);
            /*if (isset($dadosAtualizados['senha']) and isset($dadosAtualizados['confirmarSenha']) {
                $senha = $dadosAtualizados['senha'];
                $confirmarSenha = $dadosAtualizados['confirmarSenha'];
            }*/
            /*echo "dados originais</br>";
            print_r($dadosOriginais);
            
            echo "</br>dados originais</br>";
            print_r($dadosOriginais);
            exit();
            */
            unset($dadosOriginais['id']);
            unset($dadosOriginais['status']);
            if ($dadosAtualizados['fotoPerfil']==null) {
                unset($dadosAtualizados['fotoPerfil']);
                unset($dadosOriginais['fotoPerfil']);
            }
            $dadosInsert = array();
            foreach ($dadosOriginais as $colunas => $valores) {
                if ($valores!=$dadosAtualizados[$colunas]) {
                    //echo $valores."</br>";
                    //if ($colunas=="fotoPerfil" and empty($dadosAtualizados[$colunas])) {
                      //  $colunasQuery["fotoPerfil"] = $dadosOriginais[$colunas];
                        //echo "</br>".$colunasQuery[$colunas]."</br>";
                    //}else{
                        $colunasQuery[$colunas]=$dadosAtualizados[$colunas];
                    //}
                //}else
                    echo $valores;
                }
            }
            echo "colunasQuery </br>";
            print_r($colunasQuery);
            exit();
            if (!empty($senha) and !empty($confirmarSenha)) {   
                if($dadosAtualizados['senha']==$dadosAtualizados["confirmarSenha"]){
                    unset($dadosAtualizados["confirmarSenha"]);
                    foreach ($dadosAtualizados as $coluna => $valor) {
                        if(is_int($valor)){
                            $queryDinamica = $queryDinamica."{$coluna} = {$valor}, ";
                        }else{
                            $queryDinamica = $queryDinamica."{$coluna} = '{$valor}', ";
                        }
                        
                        if ($cont==$ultPosicao) {
                            $queryDinamica = substr_replace($queryDinamica, "",-2,1);
                            //echo $queryDinamica."\n";
                        }else{
                            $cont++;
                        }
                    }        
                }else{
                    return 'errSenha';
                }
            }else{
                return 'errSenhaVazia';
            }
            //unset($dadosAtualizados['confirmarSenha']);
            
            //echo $queryDinamica;
            try{
                //nome = '{$nomeNovo}', email = '{$emailNovo}', senha = '{$senhaNovaHash}', fotoPerfil = '{$fotoPerfilNovo}'
                $query = "update usuario set ".$queryDinamica.$queryWhere;
                //echo $query;
                $linhas = $this->conexao->exec($query);
            }catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
        protected function setUsuario($id){
            try {
                $query = "select * from usuario where idUsuario={$id};";
                $linhasRetornadas = $this->conexao->query($query);
                if ($linhasRetornadas->rowCount()>0) {
                    $dadosRetornados = $linhasRetornadas->fetch(PDO::FETCH_OBJ);
                            
                    $this->id = $dadosRetornados->idUsuario;
                    $this->nome = $dadosRetornados->nome;
                    $this->email = $dadosRetornados->email;
                    $this->senha = $dadosRetornados->senha;
                    $this->fotoPerfil = $dadosRetornados->fotoPerfil;    
                }
            } catch (PDOException $e) {
                echo $e;
            }   
        }
        public function getUsuario(){
            $dados = array('id'=>$this->id,
                            'nome'=>$this->nome,
                            'email'=>$this->email,
                            'fotoPerfil'=>$this->fotoPerfil);
            return $dados;
        }
        /*public function mostrarUsuarios($id){
            $query = "select * from usuario where idUsuario = {$id};";
            $consulta = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
            return $consulta;
        }*/
    }