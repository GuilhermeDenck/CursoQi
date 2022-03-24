<?php
    class Exercicio2
    {
        private $nome;
        private $anoNascimento;
        private $anoAtual;

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }

        public function getAnoNascimento()
        {
                return $this->anoNascimento;
        }

        public function setAnoNascimento($anoNascimento)
        {
                $this->anoNascimento = $anoNascimento;
                return $this;
        }

        public function getAnoAtual()
        {
                return $this->anoAtual;
        }

        public function setAnoAtual($anoAtual)
        {
                $this->anoAtual = $anoAtual;
                return $this;
        }

        public function idadeAtual()
        {
            return $this->anoAtual - $this->anoNascimento;
        }
    }
?>