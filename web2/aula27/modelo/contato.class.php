<?php

    class Contato
    {
        private $codContato; //pk - primary key
        private $nome;
        private $email;
        private $telefone;
        private $mensagem;


        public function __construct()
        {
            
        }

        public function __destruct()
        {
            
        }

        public function __get($valor){
            return $this->$valor;
        }

        public function __set($atributo, $valor){
            $this->$valor = $atributo;
        }

        public function __toString()
        {
            return nl2br("Nome: $this->nome
                         Telefone: $this->telefone
                         Email: $this->email
                         Mensagem: $this->mensagem");
        }//fecha o toString
  
      

      
   
}

?>