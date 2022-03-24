<?php

    include "../modelo/exercicio1.class.php";

    $exercicio1 = new Exercicio1();

    $exercicio1->setNumero1(10);
    $exercicio1->setNumero2(20);
    $exercicio1->setNumero3(30);

    echo "<h1>O Resultado da soma é: ".$exercicio1->somar()."</h1>";
?>