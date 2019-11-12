<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once "Conexao.php";

    class Conteudo{
        private $idConteudo;
        protected $titulo;
        protected $conteudo;
        protected $dataPostagem;
        protected $fotoCapa;
        private $idUsuario;
        public $conexao;

        public function __construct(){
            $conexao_objeto = new Conexao();
            $this->conexao = $conexao_objeto->getConexao();
        }
        public function cadastroConteudo($dadosRecebidos){
            $titulo = $dadosRecebidos['titulo'];
            $conteudo = str_replace("watch?v=","embed/",$dadosRecebidos['conteudo']);
            
            #colocar classes nos links de documentos \/
            $regexDoc = "/\/assets\/files\/.*\.(pdf|doc|docx)\"/";
            $regexLink2P="/<a href=\"\.\.\/assets\/files\/.*\.(pdf|doc|docx)\" class=\"modalDoc\">.*<\/a>/";
            preg_match_all($regexDoc, $conteudo, $matches);
            unset($matches[1]);
            foreach ($matches[0] as $key => $match) {
                $replaceDoc=$match." class=\"modalDoc\" onclick=\"return false;\"";
                $pesquisa = "/".preg_replace('/\//','\/',$match)."/";
                $conteudo = preg_replace($pesquisa,$replaceDoc,$conteudo);
            }
            $dataPostagem = date("Y-m-d H:i:s");
            $fotoCapa = $dadosRecebidos['fotoCapa'];
            $idUsuario = $dadosRecebidos['idUsuario'];
            
            try {
                $query = "insert into conteudo (titulo,conteudo,dataPostagem,fotoCapa,fk_cont_idUsuario) values ('{$titulo}','{$conteudo}','{$dataPostagem}','{$fotoCapa}',{$idUsuario});";
                $this->conexao->exec($query);
                $ultimaId = $this->conexao->query("select max(idConteudo) as idConteudo from conteudo limit 1;")->fetch(PDO::FETCH_ASSOC);
                return $ultimaId;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
        }
        public function getConteudo(int $id){
            $query = "select * from conteudo,usuario where idConteudo = {$id} and idUsuario = fk_cont_idUsuario;";
            $conteudo = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
            //$conteudoSelecionado = $conteudo->fecth(PDO::FETCH_ASSOC);
            return $conteudo;
        }

        /*public function getConteudoSRecentes(){
            $query = "select * from conteudo;";
            $conteudo = $this->conexao->query($query)->fetch(PDO::FETCH_ASSOC);
            //$conteudoSelecionado = $conteudo->fecth(PDO::FETCH_ASSOC);

            return $conteudo;
        }*/

        public function deletarConteudo($idConteudo){
            try {
                $query = "delete from duvida where idDuvida = {$idConteudo}";
                $linhas = $this->conexao->exec($query);
    
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function editarConteudo($dadosRecebidos){
            $titulo = $dadosRecebidos['titulo'];
            $conteudo = str_replace("watch?v=","embed/",$dadosRecebidos['conteudo']);
            $idConteudo = $dadosRecebidos['idConteudo'];
            #colocar classes nos links de documentos \/
            $regexDoc = "/\/assets\/files\/.*\.(pdf|doc|docx)\"/";
            $regexLink2P="/<a href=\"\.\.\/assets\/files\/.*\.(pdf|doc|docx)\" class=\"modalDoc\">.*<\/a>/";
            preg_match_all($regexDoc, $conteudo, $matches);
            unset($matches[1]);
            foreach ($matches[0] as $key => $match) {
                $replaceDoc=$match." class=\"modalDoc\" onclick=\"return false;\"";
                $pesquisa = "/".preg_replace('/\//','\/',$match)."/";
                $conteudo = preg_replace($pesquisa,$replaceDoc,$conteudo);
            }
            $dataPostagem = date("Y-m-d H:i:s");
            $fotoCapa = $dadosRecebidos['fotoCapa'];
            $idUsuario = $dadosRecebidos['idUsuario'];
            
            try {
                $query = "update conteudo set titulo = '{$titulo}', conteudo = '{$conteudo}', fotoCapa = '{$fotoCapa}' where idConteudo = {$idConteudo};";
                $this->conexao->exec($query);
                //$ultimaId = $this->conexao->query("select max(idConteudo) as idConteudo from conteudo limit 1;")->fetch(PDO::FETCH_ASSOC);
                return $idConteudo;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            //formato das datas para serem salvos == ano-mes-dia *espaço* hora:minuto:segundo
        }


    }

    //LINK IMPORTANTE
    #https://www.rexegg.com/regex-quickstart.html



    //echo date("Y-m-d H:i:s");
    /*$dados = array('titulo' => "teste1",
    "conteudo" =>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ornare tortor tortor, eu tristique sem lobortis placerat. Aenean porta diam vitae ipsum pellentesque, et porta enim pulvinar. Donec semper, est egestas ultricies egestas, risus diam sagittis mauris, pretium ullamcorper dui arcu in sem. Fusce viverra, ante ac maximus suscipit, quam nibh porttitor nisi, sit amet pharetra justo leo nec enim. Praesent tristique, turpis a consequat luctus, est dui maximus erat, eget placerat mi sapien vitae leo. Donec porttitor vitae urna non imperdiet. Cras vitae lectus quis elit iaculis tempus id non velit. Aliquam erat volutpat. Pellentesque egestas, risus a dictum egestas, neque nisl fringilla risus, non molestie nulla eros vitae mi.

    Donec placerat dui justo. In hac habitasse platea dictumst. Cras vel nisl et orci faucibus mattis. Phasellus et nisi sit amet diam vestibulum laoreet vitae ut diam. Morbi maximus neque massa, a ullamcorper tortor tempor at. Nulla vel iaculis ante, ac bibendum orci. Fusce rhoncus leo sed ipsum aliquam, sit amet condimentum quam tincidunt. Maecenas eu odio arcu. Nunc porttitor hendrerit justo, a malesuada odio sollicitudin quis. Fusce aliquet massa ac sapien cursus laoreet.",
    "fotoCapa"=>"foto.png",
    "idUsuario"=> 2
    );*/
   // $conteudo = new Conteudo();
   // $conteudo->cadastroConteudo($dados);