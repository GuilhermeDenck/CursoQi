<?php


include "../persistencia/conexaobanco.class.php";

class ContatoDAO {

    private $conexao = null; 

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    // criando a função de inserção dos dados 
    public function cadastrarContato($cont) {
        // tentar inserir no BD 

        try{
           $stat =  $this->conexao->prepare("insert into contato(codContato,nome,email,telefone,mensagem)
           values(null,?,?,?,?)");

           $stat->bindValue(1,$cont->nome);
           $stat->bindValue(2,$cont->email);
           $stat->bindValue(3,$cont->telefone);
           $stat->bindValue(4,$cont->mensagem);

           $stat->execute();

           $this->conexao = null;

        }catch(PDOException $cont){
            echo 'Erro ao cadastrar contato!';
        }
    }

    
    // buscando os contatos cadastros

    public function buscarContato(){
        try{
        // criando o select como se fosse no BD
        $stat = $this->conexao->query("select * from contato");
        // criando uma variável array para armazenar todos os contatos cadastrados
        $array = array();
        // buscar todos os registros cadastrados na classe Contato
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Contato');
        // finalizando a conexão novamente
        $this->conexao =  null;

        return $array;// retorna na tela os contatos

        }catch(PDOException $e){
        echo 'Erro ao buscar os contatos..'.$e;
        }
    }//fecha o consultar


}//fecha a classe contatodao





?>