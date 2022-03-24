<?php

    include ("../modelo/funcionario.class.php");

    $funcionario = new Funcionario();

    $funcionario->setValorHora(12.50);
    $funcionario->setTotalHoras(125);

    

    echo '<h3>Valor da Hora: '.$funcionario->getValorHora().'</h3>';
    echo '<h3>Total de Horas: '.$funcionario->getTotalHoras().'</h3>';
    echo '<h3>Salário Bruto: '.$funcionario->calcularSalario().'</h3>';

?>
