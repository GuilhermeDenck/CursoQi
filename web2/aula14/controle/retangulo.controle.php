<?php

    include "../modelo/retangulo.class.php";

    $retangulo = new Retangulo();

    $retangulo->base = $_POST['txtbase'];
    $retangulo->altura = $_POST['txtaltura'];

    echo $retangulo;

    header("location:../visao/retangulo.resposta.php?txtbase=$retangulo->base&txtaltura=$retangulo->altura&area={$retangulo->calcularArea()}:");

?>