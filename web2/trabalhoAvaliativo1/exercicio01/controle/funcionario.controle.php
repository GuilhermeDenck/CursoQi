<?php


    include "../modelo/funcionario.class.php";


    $funcionario = new Funcionario();

    $funcionario->setSalarioFixo($_POST['salarioFixo']);
    $funcionario->setValorVendas($_POST['valorVenda']);

    echo "<h1>Seu salario fixo é: ".$funcionario->getSalarioFixo()."</h1>";
    echo "<h1>Valor de Venda: ".$funcionario->getValorVendas()."</h1>";
    echo "<h1>Seu valor de comissão é: ".$funcionario->calcularComissao()."</h1>";
    echo "<h1>Seu salario final é: ".$funcionario->calcularSalarioFinal()."</h1>";




    ?>