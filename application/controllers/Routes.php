<?php

    if (isset($_GET['acao'])) {
        $rota = $_GET['acao'];
    }else{
        $rota = null;
    }

    class Rotas{
        private $acao;
        public function setRota($rota){
            $this->acao = $rota;
        }
        public function executarAcao(){
            switch ($this->acao) {
                case 'loginVer':
                    header('Location: ../views/login.php');
                    break;
                case 'cadastroUsuarioVer':
                    header('Location: ../views/cadastroUsuario.php');
                    break;
                case 'cadastroUsuarioExec':

                    break;
                default:
                    header('Location: ../../index.php');
                    break;
            }
        }
        
    }
    
    $rota = new Rotas;
    $rota->setRota($rota);
    $rota->executarAcao();
    