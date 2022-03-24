<?php

    class Exercicio1
    {
        private $numero1;
        private $numero2;
        private $numero3;

        

        public function getNumero1()
        {
                return $this->numero1;
        }

        public function setNumero1($numero1)
        {
                $this->numero1 = $numero1;
                return $this;
        }

        public function getNumero2()
        {
                return $this->numero2;
        }

        public function setNumero2($numero2)
        {
                $this->numero2 = $numero2;
                return $this;
        }

        public function getNumero3()
        {
                return $this->numero3;
        }

        public function setNumero3($numero3)
        {
                $this->numero3 = $numero3;
                return $this;
        }


        public function somar()
        {
            return $this->numero1  + $this->numero2  +$this->numero3;
        }
    }

?>