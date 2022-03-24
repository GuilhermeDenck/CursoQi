<?php

    include ("../modelo/conversao.class.php");

    $conversao = new Conversao();

    $conversao->setValorEmReal(100);

    echo '<h1> Resultados </h1>';

    echo '<p>BRL: '.$conversao->getValorEmReal().'</p>'.
         '<p>USD: '.$conversao->calcularDolar().'</p>'.
         '<p>EUR: '.$conversao->calcularEuro().'</p>';
?>    