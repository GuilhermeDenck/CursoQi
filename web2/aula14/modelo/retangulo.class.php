<?php

    class Retangulo
    {
        private $altura;
        private $base;

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function calcularArea()
        {
            return $this->altura * $this->base;
        }

        public function __toString()
        {
            return nl2br("Base: $this->base Altura: $this->altura Área: {$this->calcularArea()}");
        }
    }

?>