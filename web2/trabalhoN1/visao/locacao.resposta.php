<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" href="../css/estilo.css">

    <title>Calcular Locação</title>
</head>
<body class="p-3 mb-2 bg-dark d-flex ">
    
    
    <div class="container mt-5 text-center " style="text-align: center">
    
        
        
        <form action="../controle/locadora.controle.php" method="post" >
        <fieldset>    
        <h1 class="mb-3">Resultados:</h1>
        <div class="resposta">
        <?php

        
        echo "<h3>Nome Do Cliente: ".$_GET['txtnomecliente']."</h3>";
        echo "<br>";
        echo "<h3>Cpf: ".$_GET['txtcpf']."</h3>";
        echo "<h3>Idade: ".$_GET['txtidade']."</h3>";
        echo "<h3>Modelo De Veículo:" .$_GET['txtmodeloveiculo']."</h3>";
        echo "<h3>Tipo De Veículo: ".$_GET['txttipoveiculo']."</h3>";
        echo "<h3>Tipo De Combustível: ".$_GET['txttipodecombustivel']."</h3>";
        echo "<br>";
        echo "<h3>Valor Da Locação: R$ ".$_GET['txtlocacao']."</h3>";
        echo "<h3>Quantidade De Dias Da locação: ".$_GET['txtdiarias']."</h3>";
        echo "<h3>Valor Total Das Diárias: R$ ".$_GET['calcularDiaria']."</h3>";
        echo "<h3>Valor Estimado Do Combustível: R$ ".$_GET['calcularCombustivel']."</h3>";
        echo "<h3>Valor Final: R$ ".$_GET['valorFinal']."</h3>";



        ?>
        </div>    

        </fieldset>
        </form>
    </div>   




</body>
</html>