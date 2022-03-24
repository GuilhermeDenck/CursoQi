<?php

    include "../modelo/locacao.class.php";

    $locacao = new Locacao();

    $locacao->nomeDoCliente = $_POST['txtnomecliente'];
    $locacao->cpf = $_POST['txtcpf'];
    $locacao->idade = $_POST['txtidade'];
    $locacao->modeloDeVeiculo = $_POST['txtmodeloveiculo'];
    $locacao->tipoDeVeiculo = $_POST['txttipoveiculo'];
    $locacao->tipoDeCombustivel = $_POST['txttipodecombustivel'];
    $locacao->valorDaLocacao = $_POST['txtlocacao'];
    $locacao->dataDaLocacao = $_POST['txtdiarias'];

    header("location:../visao/locacao.resposta.php?txtnomecliente=$locacao->nomeDoCliente&txtcpf=$locacao->cpf&txtidade=$locacao->idade&txtmodeloveiculo=$locacao->modeloDeVeiculo&txttipoveiculo=$locacao->tipoDeVeiculo&txttipodecombustivel=$locacao->tipoDeCombustivel&txtlocacao=$locacao->valorDaLocacao&txtdiarias=$locacao->dataDaLocacao&calcularDiaria={$locacao->calcularDiarias()}&escolherVeiculo={$locacao->escolherVeiculo()}&calcularCombustivel={$locacao->calcularCombustivel()}&valorFinal={$locacao->totalAPagar()}");

?>