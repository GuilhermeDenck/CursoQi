Classe ConexaoBanco
<?php


    class ConexaoBanco extends PDO
     {

        private static $instancia = null; 
 
    // construtor da classe 
    // dsn - base de dados, usuario - root, senha do bd
    public function ConexaoBanco($dsn,$usuario,$senha){

        parent::__construct($dsn,$usuario,$senha);
    }

    public static function getInstancia() {

        if(!isset(self::$instancia)){

        try{// tentar
            //criando a nova conexão/
            self::$instancia = new ConexaoBanco("mysql:dbname=qifesta;host=localhost","root","");
            /* não esquecer de alterar o banco, host, usuário e senha quando colocarmos 
            a aplicação no ar.*/
        }catch(Exception $e){
            echo 'Erro ao conectar com o Banco...';
            exit();
        }//fecha o catch
        }// fecha o if
        return self::$instancia;
    }//fecha o método
 
 }// fim 

?>