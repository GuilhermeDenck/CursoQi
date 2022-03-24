<?php


        $numero = 1;

        switch($numero) {

            case 1:
                $mensagem = "Verão: Dezembro, Janeiro, Fevereiro e Março ";
            break;
    
            case 2:
                $mensagem = "Outono: Março, Abril, Maio e Junho";
            break;
    
            case 3:
                $mensagem = "Inverno: Junho, Julho, Agosto e Setembro";
            break;
    
            case 4:
                $mensagem = "Primavera: Setembro, Outubro, Novembro e Dezembro";
            break;
    
            default:
                $mensagem = "Não há estações para este valor!!";
            break;
        }
    
        echo '<h1>Sua Estação é</h1>';
        echo '<h3>'.$mensagem.'</h3>';

?>