<?php

    $valorDaParcela = 125;

    $valorDeMulta = 0.37; //divisão por 100

    $valorDeJuros = $valorDaParcela * $valorDeMulta; //quanto é 37% de 125,00

    $valorTotalComJuros = $valorDaParcela + $valorDeJuros;

    echo '<h1>Resultado:</h1>';

    echo '<p>Valor da parcela inicial R$ '.$valorDaParcela.'</p>';
    echo '<p>Valor de Juros R$ '.$valorDeJuros.'</p>';
    echo '<p>Valor Total com Juros R$ '.$valorTotalComJuros.'</p>';

?>