<?php

    require "../models/Disciplina.php";
    $disciplina = new Disciplina();

    class EditarDisciplina{
        public $disciplina;
        public function __construct($disciplina){
            $this->disciplina = $disciplina;
        }
        public function editarDisciplina($dadosRecebidos){
            $id = $dadosRecebidos['idDisciplina'];
            $disciplina = $dadosRecebidos['disciplina'];
            $this->disciplina->editarDisciplina($id,$disciplina);
            header("Location: ../views/gerenciarDisciplinas.php");
        }
    }

    $edita = new EditarDisciplina($disciplina);
    //print_r($_POST);
    $edita->editarDisciplina($_POST);