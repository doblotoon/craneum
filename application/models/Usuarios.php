abstract class Usuarios{

    private $nome;
    private $email;
    private $fotoPerfil;
    private $senha;

    abstract public function cadastrar();

}

class Aluno extends Usuarios{

}

class Professor extends Usuarios{
    
}


class Root extends Usuarios{
    
}