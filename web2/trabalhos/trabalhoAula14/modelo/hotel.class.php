<?php

    class Hotel
    {
        private $nome;
        private $email;
        private $telefone;
        private $rg;


        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo,$valor)
        {
            return $this->$atributo = $valor;
        }

        public function calcularDiaria($suite, $dias)
        {
            switch ($suite) {
                case '1':
                    $suite = 100;
                    break;

                case '2':
                    $suite = 150;
                    break;
                case '3':
                    $suite = 180;
                    break;
            }
            return $suite * $dias;
        }

        public function __toString()
        {
            return nl2br("Name : $this->name
                         E-mail: $this->email
                         Telefone: $this->telefone
                         RG: $this->rg
                         ");
        }
    }
?>