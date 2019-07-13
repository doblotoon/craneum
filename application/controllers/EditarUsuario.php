<?php
require "../views/header.php";
require "../models/Aluno.php";
require '../models/Professor.php';
    //print_r($_SESSION);
    $usuario = new Aluno;

    class EditarUsuario {

        private $usuario;

        public function __construct($usuario){
            $this->usuario = $usuario;
        }

        public function editarUsuario($sessao, array $dadosRecebidos, $todosDados){
            $dadosRecebidos['fotoPerfil'] = $this->salvarFoto();
            //echo $dadosRecebidos['fotoPerfil'];
            $this->usuario->editarUsuario($sessao, $dadosRecebidos, $todosDados);
            //echo $sessao."</br>";
            //print_r($dadosRecebidos);
        }

        public function salvarFoto(){ // TODO: Ajeitar caso o usuário queira alterar a foto.

            if (!isset($_FILES)) {

                $foto = $_FILES['fotoPerfil'];
                $destino_foto = "../assets/images/usuarios/";

                $data = date('dmYHis');
                $nomeExplodido= explode('.', $foto['name']);
                $extensao= end($nomeExplodido);
                $nomeSemEspaco= str_replace(' ','',$nomeExplodido[0]);
                $nomeFoto= $nomeSemEspaco.$data.".".$extensao;
                $arquivoFinal = $destino_foto.$nomeFoto;
                $origem= $foto['tmp_name'];
                $enviada= move_uploaded_file($origem, $arquivoFinal);
                //$caminho = $nomeFoto;
                $caminho = $arquivoFinal;
                echo "esse é o caminho: ".$caminho;
                return $caminho;
            }elseif(isset($_FILES)){
                echo "COm imagem</br>";
                $caminho = 'null';
                echo "esse é o caminho fudido: ".$caminho;
                return $caminho;
            }
        }
        
    }   

    $update = new EditarUsuario($usuario);
/*
    if (isset($_GET['acao'])) {
        switch ($_GET['acao']) {
            case 'dados':
*/
    $update->editarUsuario($_SESSION['id'],$_POST,$_SESSION);
/*
                break;
            case 'foto':
                $update->salvarFoto($_SESSION['id'],$_FILES);
                break;
            default:
                header("Location: ../views/editarUsuario.php");
                break;
        }
    }
*/
    
    //print_r($_SESSION);