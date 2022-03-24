<?php


include "pessoa.class.php";


    //objeto da classe
    $pessoa = new Pessoa();

    //enviando dados para o sistema via set
    $pessoa->setNome("Guilherme");
    $pessoa->setIdade(16);

    echo '<h3>Resultado Final:</h3>';
    echo '<p>Nome: '.$pessoa->getNome().'</p>';
    echo '<p>Idade: '.$pessoa->getIdade().'</p>';

    ?>
