<?php


    class Pessoa
    {

        private $nome;
        private $idade;
        private $altura;
        private $peso;
        private $rg;

        public function __construct()
        {

        }
      
        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;

                return $this;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        public function getRg()
        {
                return $this->rg;
        }

      
        public function setRg($rg)
        {
                $this->rg = $rg;

                return $this;
        }

       
        public function getPeso()
        {
                return $this->peso;
        }

     
        public function setPeso($peso)
        {
                $this->peso = $peso;

                return $this;
        }

        public function getAltura()
        {
                return $this->altura;
        }

        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }


        public function calcularIMC(){
            return ($this->peso/pow($this->altura,2));
        }


    }





?> 