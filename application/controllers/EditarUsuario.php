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
            if (!empty($_FILES['fotoPerfil']['name'])) {
                $dadosRecebidos['fotoPerfil'] = $this->salvarFoto();
            }
            if (!empty($_POST['senha']) and !empty($_POST['confirmarSenha'])) {
                if ($_POST['senha']==$_POST['confirmarSenha']) {
                    $this->usuario->editarUsuario($sessao, $dadosRecebidos, $todosDados);        
                }else{
                    return "errSenha";
                }
            }else{
                $this->usuario->editarUsuario($sessao, $dadosRecebidos, $todosDados);
            }
        }

        public function salvarFoto(){ // TODO: Ajeitar caso o usuário queira alterar a foto.

            if (isset($_FILES)) {

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
                $caminho = $arquivoFinal;
                return $caminho;
            }
        }
        
    }   

    $update = new EditarUsuario($usuario);
    $update->editarUsuario($_SESSION['id'],$_POST,$_SESSION);