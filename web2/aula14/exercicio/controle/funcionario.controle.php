<?php

    include "../modelo/funcionario.class.php";

    $funcionario = new Funcionario();

    $funcionario->nome = $_POST['txtnome'];
    $funcionario->cargo = $_POST['txtcargo'];
    $funcionario->matricula = $_POST['txtmatricula'];
    $funcionario->valorHora = $_POST['txtvalorhora'];
    $funcionario->totalHoras = $_POST['txttotalhora'];

    header("location:../visao/funcionario.resposta.php?txtnome=$funcionario->nome&txtcargo=$funcionario->cargo&txtmatricula=$funcionario->matricula&txtvalorhora=$funcionario->valorHora&txttotalhora=$funcionario->totalHoras&salario={$funcionario->calcularSalario()}");



?>