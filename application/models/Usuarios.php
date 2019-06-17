<?php
abstract class Usuarios{

    protected $nome;
    private $id;
    protected $email;
    protected $fotoPerfil;
    private $senha;

    abstract public function cadastrar();

}

