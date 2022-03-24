<?php
    
    class Olho
    {
        private $codDaltonismo; //pk - primary key
        private $nome;
        private $idade;
        private $email;
   
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
                          Idade : $this->idade
                          Email: $this->email");
        }//fecha o toString
  
      

      
   
}
