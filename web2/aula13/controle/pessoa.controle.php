<?php

    include "../modelo/pessoa.class.php";

    $pessoa = new Pessoa;

    $pessoa->nome = $_POST ['txtnome'];
    $pessoa->idade = $_POST ['txtidade'];

   //echo $pessoa;
   // header("location:https://youtube.com")

   header("location:../visao/pessoa.resposta.php?txtnome=$pessoa->nome&txtidade=$pessoa->idade&resultado={$pessoa->calcularIdadeEmMeses()}");
?>