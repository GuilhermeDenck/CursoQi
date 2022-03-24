<?php


include "../persistencia/conexaobanco.class.php";

class olhoDAO {

    private $conexao = null; 

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    // criando a função de inserção dos dados 
    public function cadastrarExame($olho) {
        // tentar inserir no BD 

        try{
           $stat =  $this->conexao->prepare("insert into daltonismo(codDaltonismo,nome,idade,email)
           values(null,?,?,?)");

           $stat->bindValue(1,$olho->nome);
           $stat->bindValue(2,$olho->idade);
           $stat->bindValue(3,$olho->email);

           $stat->execute();

           $this->conexao = null;

        }catch(PDOException $olho){
            echo 'Erro ao cadastrar Exame!';
        }
    }

    
    // buscando os contatos cadastros
    public function buscarContato(){
        try{
        // criando o select como se fosse no BD
        $stat = $this->conexao->query("select * from daltonismo");
        // criando uma variável array para armazenar todos os contatos cadastrados
        $array = array();
        // buscar todos os registros cadastrados na classe Contato
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Olho');
        // finalizando a conexão novamente
        $this->conexao =  null;

        return $array;// retorna na tela os contatos

        }catch(PDOException $e){
        echo 'Erro ao buscar os contatos..'.$e;
        }
    }//fecha o consultar




    public function deletarContato($codDaltonismo){
		try{
			$stat = $this->conexao->prepare("delete from daltonismo where codDaltonismo=?");
			
			$stat->bindValue(1,$codDaltonismo);
			
			$stat->execute();
			
			$this->conexao = null;
            
		}catch(PDOException $e){
			echo 'Erro ao deletar contato';
		}//fecha catch
	}//fecha deletarContato


}//fecha a classe contatodao





?>