<?php

    class Aluno
    {
        private $nome;  //input que receba texto
        private $ra;    //input que receba números
        private $nota1; //input que receba números
        private $nota2; //input que receba números
        private $disciplina;  //select que receba textos/numeros  
        private $parecer;     //textarea - mensagem

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }

        public function getRa()
        {
                return $this->ra;
        }

        public function setRa($ra)
        {
                $this->ra = $ra;
                return $this;
        }

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


        public function getDisciplina()
        {
                return $this->disciplina;
        }

        public function setDisciplina($disciplina)
        {
                $this->disciplina = $disciplina;
                return $this;
        }

        public function getParecer()
        {
                return $this->parecer;
        }

        public function setParecer($parecer)
        {
                $this->parecer = $parecer;
                return $this;
        }

        public function calcularMedia()
        {
            return ($this->nota1 + $this->nota2)/2;
        }

        public function verificarConceito()
        {
            if($this->calcularMedia() >= 6){
                return  "Aluno Aprovado!";
            }else {
                return "Aluno Reprovado!";
            }
        }

       
    }
   /* $aluno = new Aluno;
    $aluno->setNota1(6);

    echo "Nota 1: ".$aluno->getNota1();
    */

?>