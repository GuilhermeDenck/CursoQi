<?php

    include '../modelo/hotel.class.php';

    $hotel = new Hotel();

    echo "<h1>Diaria Semana: $ {$hotel->calcularDiaria($_POST['inputweekend'], $_POST['inputchildren'], $_POST['inputdays'])}</h1>";