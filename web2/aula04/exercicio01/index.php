<?php

    include "pessoa.class.php";

     //objeto da classe
     $pessoa = new Pessoa();

     //enviando dados para o sistema via set
     $pessoa->setNome("Guilherme");
     $pessoa->setIdade(16);

     echo '<h1>Resultado:</h1>';
     echo '<h3>Idade: '.$pessoa->getIdade().'</h3>';
     echo '<h3>Meses: '.$pessoa->calcularIdadeEmMeses().'</h3>';
     echo '<h3>Semanas: '.$pessoa->calcularIdadeEmSemanas().'</h3>';
     echo '<h3>Dias: '.$pessoa->calcularIdadeEmDias().'</h3>';
?>