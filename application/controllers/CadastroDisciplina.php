<?php
    require_once "../models/Disciplina.php";

    class cadastroTag{
        public $disciClasse;

        public function __construct(){
            $this->disciClasse = new Tag();
        }
        public function cadastrarDisciplina($ultimaId){
            $this->disciClasse->cadastroDisciplina($ultimaId);
        }
    }