<?php
    require_once "../models/Tag.php";

    class cadastroTag{
        public $tagClasse;

        public function __construct(){
            $this->tagClasse = new Tag();
        }
        public function cadastrarTag($ultimaId){
            $this->tagClasse->cadastroTag($ultimaId);
        }
        public function atualizarTag($idConteudo){
            $this->tagClasse->atualizarTag($idConteudo);
        }
    }