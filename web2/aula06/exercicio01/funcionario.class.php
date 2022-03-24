<?php

    class Funcionario
    {
        private $valorHora;
        private $totalHoras;

        public function __construct()
        {
            
        }

        public function getValorHora()
        {
                return $this->valorHora;
        }

        public function setValorHora($valorHora)
        {
                $this->valorHora = $valorHora;
                return $this;
        }

        public function getTotalHoras()
        {
                return $this->totalHoras;
        }

        public function setTotalHoras($totalHoras)
        {
                $this->totalHoras = $totalHoras;
                return $this;
        }


        public function calcularSalario()
        {
            return $this->valorHora * $this->totalHoras;
        }

        //VT 6%

        public function calcularValeTransporte()
        {
            return $this->calcularSalario() * 0.06;
        }
    }
?>






