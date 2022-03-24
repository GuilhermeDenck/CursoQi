<?php

    class Exercicio03
    {
        private $descricao;
        private $valor;
        private $quantidade;

        public function getDescricao()
        {
                return $this->descricao;
        }

        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;
                return $this;
        }

        public function getValor()
        {
                return $this->valor;
        }

        public function setValor($valor)
        {
                $this->valor = $valor;
                return $this;
        }

        public function getQuantidade()
        {
                return $this->quantidade;
        }

        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;
                return $this;
        }

        public function calcularProduto()
        {
            return $this->valor * $this->quantidade;
        }
    }

?>