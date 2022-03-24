<?php

    $valor = 18;
    $resposta = " ";

        if($valor > 0) {
            $resposta = "Valor é positivo.";
        }
        elseif($valor < 0) {
            $resposta = "Valor negativo.";
        }else {
            $resposta = "Valor igual a zero.";
        }

        echo $resposta;


?>