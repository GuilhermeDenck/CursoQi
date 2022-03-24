<?php

    include "../modelo/locadora.class.php";

    $locadora = new Locadora();

    $locadora->setQuantidadeDiarias($_POST['txtdiarias']);
    $locadora->setTipoDeCombustivel($_POST['tipoveiculo']);
    $locadora->setValorDaLocacao($_POST['txtlocacao']);
    $locadora->setTipoDeVeiculo($_POST['tipoveiculo']);
    $locadora->setVeiculo($_POST['txtveiculo']);

    

    echo "<h1>Carro Selecionado ".$locadora->getVeiculo()."</h1>";
    echo "<h1>Total de Diarias ".$locadora->calcularDiarias()."</h1>";
    echo "<h1>Tarifa tipo de veículo ".$locadora->escolherVeiculo()."</h1>";
    echo "<h1>Tarifa total com combustivel ".$locadora->calcularCombustivel()."</h1>";
    echo "<h1>Total de locação: R$ ".$locadora->calcularTotalAPagar()."</h1>";




?>