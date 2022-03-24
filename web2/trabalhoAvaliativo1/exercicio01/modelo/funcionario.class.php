<?php

    class Funcionario
    {
        private $salarioFixo;
        private $valorVendas;

        public function getSalarioFixo()
        {
                return $this->salarioFixo;
        }

        public function setSalarioFixo($salarioFixo)
        {
                $this->salarioFixo = $salarioFixo;
                return $this;
        }

        public function getValorVendas()
        {
                return $this->valorVendas;
        }

        public function setValorVendas($valorVendas)
        {
                $this->valorVendas = $valorVendas;
                return $this;
        }


        public function calcularComissao()
        {
            return $this->valorVendas * 0.04;
        }

        public function calcularSalarioFinal()
        {
            return $this->salarioFixo + $this->calcularComissao();
        }
    }

?>