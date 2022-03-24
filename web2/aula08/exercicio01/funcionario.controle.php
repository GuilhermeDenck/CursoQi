<?php

   include ("funcionario.class.php");

    $funcionario = new Funcionario();

    $funcionario->setValorHora(15.55);
    $funcionario->setTotalHoras(175);

    
    echo '<h1>Resultado </h1';
    echo '<hr>';
    echo '<h3>Valor da Hora: '.$funcionario->getValorHora().'</h3>';
    echo '<h3>Total de Horas: '.$funcionario->getTotalHoras().'</h3>';
    echo '<h3>Salário Bruto: '.$funcionario->calcularSalario().'</h3>';
    echo '<hr>';
    echo '<h3>Vale Transporte: '.$funcionario->calcularValeTransporte().'</h3>';
    echo '<h3>INSS: '.$funcionario->calcularINSS(0).'</h3>';
    echo '<h3>Salário Liquido: '.$funcionario->calcularSalarioLiquido().'</h3>';
    

?>
