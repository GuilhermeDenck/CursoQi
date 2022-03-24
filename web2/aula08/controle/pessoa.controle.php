<?php


include
 "../modelo/pessoa.class.php";


$pessoa = new Pessoa();


    $pessoa->setNome($_POST['txtnome']);
    $pessoa->setIdade($_POST['txtidade']);
    $pessoa->setRg($_POST['txtrg']);
    $pessoa->setPeso($_POST['txtpeso']);
    $pessoa->setAltura($_POST['txtaltura']);

    echo "<h1>Nome: {$pessoa->getNome()}"."<br>Idade: {$pessoa->getIdade()}"."</h1>".
     "<br>RG: {$pessoa->getRg()}"."</h1>"."<br>Peso: {$pessoa->getPeso()}"."</h1>".
     "<br>Altura: {$pessoa->getAltura()}"."</h1>".
     "<br>IMC: {$pessoa->calcularIMC()}"."</h1>";

/*
$pessoa = new Pessoa;
$pessoa->setNome("Rita");
$pessoa->setIdade(32);

echo "<br>Nome: ".$pessoa->getNome();
echo "<br>Idade: ".$pessoa->getIdade();
*/


?>