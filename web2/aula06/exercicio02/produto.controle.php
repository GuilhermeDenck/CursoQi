<?php

    include "produto.class.php";

    $produto = new Produto();

    $produto->setNome("Televisão");
    $produto->setValor(600);
    $produto->setQuantidade(1);

     // Dados do produto
     echo '<p>Produto: '.$produto->getNome().'</p>'.
     '<p>Valor R$ '.$produto->getValor().'</p>'.
     '<p>Quantidade: '.$produto->getQuantidade().'</p>';

    echo'<br>'; // nova linha - espaço 

    // valor da compra inicial
    echo '<p>Valor Total R$ '.$produto->calcularProduto().'</p>';
    
    // condições - forma de pagamento
    echo '<p>Valor de Desconto 10%: R$ '.$produto->calcularValorDeDesconto().'</p>'.
          '<p>Valor de Juros 2,5%: R$ '.$produto->calcularValorDeJuros().'</p>';
    
    // Valores finais 
    echo '<p>Valor Total com Desconto R$ '.$produto->calcuclarTotalDaCompraComDesconto().'</p>';
    echo '<p>Valor Total com Juros R$ '.$produto->calcuclarTotalDaCompraComJuros().'</p>';
     
          

?>