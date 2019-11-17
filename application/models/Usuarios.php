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

        

        public function deletaUsuario($idUser){

            try {
                $query = "delete from usuario where idUsuario = {$idUser};";
                $linhas = $this->conexao->exec($query);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function EditarUsuario($idUsuario,array $dadosAtualizados, array $dadosOriginais){
            $queryDinamica = " ";
            $queryWhere = "where idUsuario = {$idUsuario};";
            $cont=1;
            unset($dadosOriginais['id']);
            unset($dadosOriginais['status']);
            if (!isset($dadosAtualizados['fotoPerfil'])) {
                unset($dadosOriginais['fotoPerfil']);
            }
            foreach ($dadosAtualizados as $colunas => $valores) {
                if (empty($valores) or $valores == $dadosOriginais[$colunas]) {
                    unset($dadosAtualizados[$colunas]);
                    unset($dadosOriginais[$colunas]);
                }
            }
            $ultPosicao = sizeof($dadosAtualizados);
            foreach ($dadosOriginais as $colunas => $valores) {    
                $valorAtual = $dadosAtualizados[$colunas];        
                if (is_int($valorAtual)) {
                    $queryDinamica = $queryDinamica."{$colunas} = {$valorAtual}, ";
                }else{
                    $queryDinamica = $queryDinamica."{$colunas} = '{$valorAtual}', ";
                }
        
                if ($cont==$ultPosicao) {
                    $queryDinamica = substr_replace($queryDinamica, "",-2,1);
                }else{
                    $cont++;    
                }
            }
            try{
                $query = "update usuario set ".$queryDinamica.$queryWhere;
                $linhas = $this->conexao->exec($query);
                if ($linhas==1) {
                    foreach ($dadosAtualizados as $colunas => $valores) {
                        $_SESSION[$colunas] = $valores;
                    }
                }
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
                            'fotoPerfil'=>$this->fotoPerfil,
                            'senha'=>$this->senha);
            return $dados;
        }
        public function getTipoUsuario($idUsuario){
            $query = "select tipo from usuario,tipousuario where fk_usu_idTipoUsuario = idTipoUsuario and idUsuario = {$idUsuario};";
            $tipo = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
            $tipoUsuario = $tipo['tipo'];
            return $tipoUsuario;
        }

        public function salvarConteudo($idUsuario,$idConteudo){
            $dataSalvo = date("Y-m-d H:i:s");
            //var_dump($idConteudo);
            //$idConteudo = (int) $idConteudo;
            //$idUsuario = (int) $idUsuario;
            
            $query = "insert into conteudosalvo (fk_cs_idUsuario,fk_cs_idConteudo, salvoEm) values ({$idUsuario},{$idConteudo},'{$dataSalvo}');";
            try {
                $this->conexao->exec($query);
            } catch (PDOException $e) {
                echo $e;
            }
        }

        public function removerSalvo($idUsuario,$idConteudo){
            $query = "delete from conteudosalvo where fk_cs_idUsuario = {$idUsuario} and fk_cs_idConteudo = {$idConteudo};";
            try {
                $this->conexao->exec($query);
            } catch (PDOException $e) {
                echo $e;
            }
        }

        public function taSalvo($idUsuario,$idConteudo){
            $query = "select * from conteudosalvo where fk_cs_idUsuario = {$idUsuario} and fk_cs_idConteudo = {$idConteudo};";
            
            try{
                $linhas = $this->conexao->query($query);
                if ($linhas->rowCount()>0) {
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo $e;
            }
        }

        public function getAllUsuarios($idUsuario){
            $query = "select nome, idUsuario, fotoPerfil, email, tipo from usuario, tipousuario where fk_usu_idTipoUsuario = idTipoUsuario and idUsuario != {$idUsuario};";
            try {
                $usuarios = $this->conexao->query($query)->fetchAll(PDO::FETCH_ASSOC);
                return $usuarios;
            } catch (PDOException $e) {
                echo $e;
            }
        }

        public function mudaTipoUsuario($idUsuario,$tipoMudanca){
                if (strlen((string)$idUsuario)>7) {
                    $tipoOriginal = 1;
                }else{
                    $tipoOriginal = 2;
                }

                switch ($tipoMudanca) {
                    case 'eleva':
                        $tipoNovo = 4;
                        break;

                    case 'rebaixa':
                        $tipoNovo = $tipoOriginal;
                        break;
                    
                }
                $query = "update usuario set fk_usu_idTipoUsuario = {$tipoNovo} where idUsuario = {$idUsuario};";
                try {
                    $this->conexao->exec($query);
                } catch (PDOException $e) {
                    echo $e;
                }
        }

        /*public function mostrarUsuarios($id){
            $query = "select * from usuario where idUsuario = {$id};";
            $consulta = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
            return $consulta;
        }*/

    }

