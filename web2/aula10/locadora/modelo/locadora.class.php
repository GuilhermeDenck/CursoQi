<?php

    class Locadora
    {

        private $veiculo;
        private $tipoDeVeiculo;
        private $tipoDeCombustivel;
        private $valorDaLocacao;
        private $quantidadeDiarias;




        public function getVeiculo()
        {
                return $this->veiculo;
        }

        public function setVeiculo($veiculo)
        {
                $this->veiculo = $veiculo;
                return $this;
        }

        public function getTipoDeVeiculo()
        {
                return $this->tipoDeVeiculo;
        }

        public function setTipoDeVeiculo($tipoDeVeiculo)
        {
                $this->tipoDeVeiculo = $tipoDeVeiculo;
                return $this;
        }

        public function getTipoDeCombustivel()
        {
                return $this->tipoDeCombustivel;
        }

        public function setTipoDeCombustivel($tipoDeCombustivel)
        {
                $this->tipoDeCombustivel = $tipoDeCombustivel;
                return $this;
        }

        public function getValorDaLocacao()
        {
                return $this->valorDaLocacao;
        }

        public function setValorDaLocacao($valorDaLocacao)
        {
                $this->valorDaLocacao = $valorDaLocacao;
                return $this;
        }

        public function getQuantidadeDiarias()
        {
                return $this->quantidadeDiarias;
        }

        public function setQuantidadeDiarias($quantidadeDiarias)
        {
                $this->quantidadeDiarias = $quantidadeDiarias;
                return $this;
        }
    
    
        public function calcularDiarias()
        {
            return $this->quantidadeDiarias * $this->valorDaLocacao;
        }




        public function escolherVeiculo()
        {
            
           if ($this->tipoDeVeiculo == 1) {
               return $this->calcularDiarias() * 0.02; //passeio
           } else {
               return $this->calcularDiarias() * 0.05; //executivo
           }

        }

        public function calcularCombustivel()
        {   
           if ($this->tipoDeCombustivel == 1) {
               return $this->calcularTotalAPagar() + 50;
           }else {
               return $this->calcularTotalAPagar() + 100;
           } 
        }


        public function calcularTotalAPagar()
        {
            return ($this->calcularDiarias() + $this->escolherVeiculo());
        }
        
    }


?>