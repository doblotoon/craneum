<?php
    require_once "../models/Disciplina.php";

    class cadastroDisciplina{
        public $disciClasse;

        public function __construct(){
            $this->disciClasse = new Disciplina();
        }
        public function cadastrarDisciplina($ultimaId){
            $this->disciClasse->cadastroDisciplina($ultimaId);
        }
    }