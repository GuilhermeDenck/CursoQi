<?php

    class Funcionario
    {
        private $nome;
        private $cargo;
        private $matricula;
        private $turno;
        private $valorDeHoras;
        private $totalDeHoras;
        private $tempoDeCasa;

        private $plano;

        function __construct() 
        {
            
        }

        function __get($atributo)
        {
            return $this->valor = $atributo;
        }

        function __set($atributo, $valor)
        {
            $this->$atributo = $valor; 
        }

        public function calcularSalario()
        {
            return $this->valorDeHora * $this->totalDeHoras;
        }

        public function calcularVale()
        {
            return $this->calcularSalario() * 0.06;
        }

        public function calcularINSS()
        {
            if($this->calcularSalario() <= 1045) {
                return $this->calcularSalario() * 0.075;
            }elseif ($this->calcularSalario() >= 1045.01 && $this->calcularSalario() <= 2089.70){
                return $this->calcularSalario() * 0.09;
            }elseif ($this->calcularSalario() >= 2089.61 && $this->calcularSalario() <= 3134.40){
                return $this-calcularSalario() * 0.12;
            }elseif ($this->calcularSalario() >= 3134.41 && $this->calcularSalario() <= 6101.06){
                return $this->calcularSalario() * 0.14;
            }else{
                return 0;
            }
 
        }
        
        public function calcularPlanoDeSaude()
         {

            switch ($this->plano){
                case "individual": 
                    $total =  60;
                    break; 
                case "dependente": 
                    $total = 80;
                    break; 
                default: 
                    $total = 0;
                    break; 
            }//fecha o switch
                return $total;
        }

        public function calcularPremiacao()
        {
            if($this->tempoDeCasa >= 5 ){
                return $this->calcularSalario() * 0.05;
            }else {
                return 0;
            }
        }

        public function calcularAdicionalNoturno()
        {
            switch ($this->turno) {
               case "diurno":
                $adicional = 10;
                 break;
               case "noturno":
                $adicional = 200;
                break;
               default:
                $adicional = 0;
                break;
            }
            return $adicional;
        }

        public function calcularSalarioFinal()
        {
            return ($this->calcularSalario() - $this->calcularvale() - $this->calcularINSS() - $this->calcularPlanoDeSaude())
            + $this->calcularPremiacao() + $this->calcularAdicionalNoturno();
        }

        public function __toString()
        {
           return nl2br("Funcionário: $this->nome Matrícula: $this->matricula Cargo: $this->cargo Turno: $this->turno
            Plano de Saúde: $this->plano Tempo de Casa: $this->tempoDeCasa Salário Bruto R$ {$this->calcularSalario()} 
            Vale Transporte R$ {$this->calcularVale()} Premiacao Tempo de Casa R$ {$this->calcularPremiacao()} 
            Adicional noturno R$ {$this->calcularAdicionalNoturno()} Salário Final R${$this->calcularSalarioFinal()}");
        }
    }
    

?>