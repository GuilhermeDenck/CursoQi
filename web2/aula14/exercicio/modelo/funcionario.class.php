<?php

    class Funcionario
    {
        private $nome;
        private $cargo;
        private $matricula;
        private $valorHora;
        private $totalHoras;


        public function __construct()
        {
            
        }

        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }

        public function calcularSalario()
        {
            return $this->valorHora * $this->totalHoras;
        }

        public function __toString()
        {
            return nl2br("Nome: $this->nome 
                          Cargo: $this->cargo
                          Matrícula: $this->matricula
                          Valor de Horas R$ $this->valorHora
                          Total de Horas: $this->totalHora
                          Salário Final: {$this->calcularSalario()}");
        }
    }

?>