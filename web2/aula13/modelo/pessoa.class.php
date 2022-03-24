<?php

    class Pessoa
    {
        private $nome;
        private $idade; 

        public function __construct()
        {

        }
        public function __destruct()
        {

        }
        public function  __get($atributo)
        {
            return $this->$atributo;
        }

        public function  __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function calcularIdadeEmMeses()
        {
            return $this->idade * 12;
        }

        public function __toString()
        {
            return nl2br("Nome:  $this->nome 
                         Idade:  $this->idade 
                         Idade em Meses: {$this->calcularIdadeEmMeses()}");
        }


    }

?>