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

       
        public function calcularINSS($valor)
        {
        if ($valor == 1) {
            $sB = $this->calcularSalario();
            if( $sB <= 1045.00){
                $inss = 0.075;
            }elseif ($sB <= 2089.60) {
                $inss = 0.09;
            }elseif ($sB <= 3134.40) {
                $inss = 0.12;
            }elseif ($sB <= 6101.06){
                $inss = 0.14;
            }else {
                $inss = 00;
            }
            
        
        }else {
            $sB = $this->calcularSalario();
            if( $sB <= 1045.00){
                $inss = "7,5%";
            }elseif ($sB <= 2089.60) {
                $inss = "9%";
            }elseif ($sB <= 3134.40) {
                $inss = "12%";
            }elseif ($sB <= 6101.06){
                $inss = "14%";
            }else {
                $inss = "error";
            }
            
        
        }
        return $inss;
    }

        public function calcularSalarioLiquido()
        {
            return $this->calcularSalario() - $this->calcularValeTransporte() - $this->calcularINSS(1);
        }
    }
?>






