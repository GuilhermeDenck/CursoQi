<?php

    $numero = 4;
    switch($numero) {

        case 1:
            $mensagem = "1 Bicicleta!";
        break;

        case 2:
            $mensagem = "1 Televisão";
        break;

        case 3:
            $mensagem = "1 Celular";
        break;

        case 4:
            $mensagem = "1 Tablet";
        break;

        case 5:
            $mensagem = "1 Geladeira";
        break;

        default:
            $mensagem = "Não há premiações para este valor!!";
        break;
    }

    echo "Seu prêmio é: {$mensagem}";





?>