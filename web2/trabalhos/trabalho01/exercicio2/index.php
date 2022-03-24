<?php


include "calculo.class.php";

$calculo = new Calculo();

$calculo->setValor1(60);
$calculo->setValor2(30);

echo '<h3>Resultado Final:</h3>';
echo '<p> Adição: '.$calculo->cacularAdicao().'</p>';
echo '<p> Subtração: '.$calculo->cacularSubtracao().'</p>';
echo '<p> Multiplicação: '.$calculo->cacularMultiplicacao().'</p>';
echo '<p> Divisão: '.$calculo->cacularDivisao().'</p>';

?>