<?php

    include '../modelo/hotel.class.php';

    $hotel = new Hotel();
    $hotel->nome = $_POST['txtnome'];
    $hotel->email = $_POST['txtemail'];
    $hotel->telefone = $_POST['txttelefone'];
    $hotel->rg = $_POST['txtrg'];

 
    
    header("location:../visao/hotel.resposta.php?txtnome=$hotel->nome&txtemail=$hotel->email&txttelefone=$hotel->telefone&txtrg=$hotel->rg&resposta={$hotel->calcularDiaria($_POST['txtsuite'], $_POST['txtdias'])}");
?>