<?php

    require "../models/Disciplina.php";
    $disciplina = new Disciplina();

    class AdicionarDisciplina{
        public $disciplina;
        public function __construct($disciplina){
            $this->disciplina = $disciplina;
        }
        public function adicionarDisciplina($dadosRecebidos){

        }
    }

    $edita = new EditarDisciplina($disciplina);
    //print_r($_POST);
    $edita->editarDisciplina($_POST);