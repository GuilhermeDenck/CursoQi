<?php

    include "../modelo/exercicio03.class.php";

    $exercicio03 = new  Exercicio03();

    $exercicio03->setDescricao("Bis");
    $exercicio03->setQuantidade(10);
    $exercicio03->setValor(4.50);

    echo "<h3>Total a Pagar R$".$exercicio03->calcularProduto()."</h3>";              

?>