<?php


include "produto.class.php";

$produto = new Produto();

$produto->setNome("Copo");
$produto->setValor(10);
$produto->setQuantidade(5);

echo '<h3>Resultado Final:</h3>';
echo '<p>Nome: '.$produto->getNome().'</p>';
echo '<p>Valor Final Do Produto: R$ '.$produto->calcularValorFinal().'</p>';

?>