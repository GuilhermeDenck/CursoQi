<?php

    include "../modelo/exercicio2.class.php";

    $exercicio2 = new Exercicio2();

    $exercicio2->setNome("Guilherme Denck");
    $exercicio2->setanoNascimento(2004);
    $exercicio2->setanoAtual(2020);

    echo "<h1>Nome: ".$exercicio2->getNome()."</h1>";
    echo "<h3>Sua idade é : ".$exercicio2->idadeAtual()."</h3>";

?>