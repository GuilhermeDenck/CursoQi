<?php

    class Conversao
    {
        private $valorEmReal;


 /*       //função método mágicos
        public function __construct()
        {

        }
*/        

        public function Conversao()
        {

        }

        public function getValorEmReal()
        {
                return $this->valorEmReal;
        }

        public function setValorEmReal($valorEmReal)
        {
                $this->valorEmReal = $valorEmReal;
                return $this;
        }
        
        //Euro

        public function calcularEuro()
        {
            return $this->valorEmReal / 6.43;
        }

        //Dólar

        public function calcularDolar()
        {
            return $this->valorEmReal / 5.43;
        }


    }

?>    