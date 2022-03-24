<?php


// criando variáveis arrays

    $nome = array('Rita','Mauricio');

    echo "<br>Nome: ".$nome[0];
    echo "<br> Nome: ".$nome[1];

    $produto [] =  "leite";

     echo "<br>Produto:".$produto[0];


     // criando tipos de variáveis e índices por letras


     echo "<br>";

     $estado ['RS'] = 'Rio Grando do Sul';

     echo "<br>Estado: ".$estado['RS'];

     echo "<br>";

    $cidade = array ('NH' => 'Novo Hamburgo', 'POA' => 'Porto Alegre');

    echo "<br>".$cidade['NH'];
    echo "<br>".$cidade['POA'];

    // imprimindo valores do array e suas posições - índices 

    echo "<br>";

    $pais = array('Brazil','Canadá');

    print_r($pais);

    echo "<br><br>";

    // função para contar quantos valores há no array: 

    $aluno = array('Maria','Pedro','Lucia');

    echo '<h4>Na variável $aluno possui: '.count($aluno).' valores.';

    echo "<br><br>";

    // função para verificar se há um valor específico no array...
    
    
    $estado = array('RS','RJ','SC','SP');

    if(in_array('SP',$estado) == true){
        echo 'Valor SP foi encontrado.';
    }else{
        echo 'Valor SP não foi encontrado.';
    }

    echo "<br><br>";

    /*Retorna um novo array onde os índices serão valores do array e
     os valores, o número de ocorrências de cada valor*/

     $frutas = array('laranja','uva','morango','melancia','laranja');

     print_r(array_count_values($frutas));


     
    echo "<br><br>";

    // função para saber se a variável é um array 

    $suco = array('del valle','maguary','sulavan','petry');

    if(is_array($suco) == true){
        echo 'Esta variável é um array.';
    }else{
        echo 'Esta não variável é um array..';
    }


?>