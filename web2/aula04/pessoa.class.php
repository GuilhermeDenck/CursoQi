<?php

    class Pessoa
    {
        private $nome;
        private $idade;

        //funções da classe

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }

        public function getIdade()
        {
                return $this->idade;
        }

        public function setIdade($idade)
        {
                $this->idade = $idade;
                return $this;
        }
    }//fim da classe

    
    //inicio de teste


    //objeto da classe
   // $pessoa = new Pessoa();

    //enviando dados para o sistema via set
   // $pessoa->setNome("Guilherme");
   // $pessoa->setIdade(16);

   // echo '<h3>Resultado Final:</h3>';
  //  echo '<p>Nome: '.$pessoa->getNome().'</p>';
   // echo '<p>Idade: '.$pessoa->getIdade().'</p>';

    ?>