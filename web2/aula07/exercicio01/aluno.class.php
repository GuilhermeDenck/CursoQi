<?php

    class Aluno {
        private $nota1;
        private $nota2;

        public function getNota1()
        {
                return $this->nota1;
        }

        public function setNota1($nota1)
        {
                $this->nota1 = $nota1;
                return $this;
        }

        public function getNota2()
        {
                return $this->nota2;
        }

        public function setNota2($nota2)
        {
                $this->nota2 = $nota2;
                return $this;
        }


        public function calcularMedia() {
            return ($this->nota1 + $this->nota2)/2;
        }


        public function verificarConceito() {
            if($this->calcularMedia() >= 6){
                return "Aluno Aprovado: ".$this->calcularMedia();
            }elseif ($this->calcularMedia() >=4 && $this->calcularMedia() <=5.9) {
                return "Aluno em Exame: ".$this->calcularMedia();
            }
            else{
                return "Aluno Reprovado: ".$this->calcularMedia();
            }
        }





    }



?>