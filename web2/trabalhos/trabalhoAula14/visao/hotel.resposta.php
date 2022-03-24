<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <h1>Reserva Hotel</h1>
    
        <h2>Dados Da Reserva</h2>
        <div class="jumbotron">
        <?php
        
            echo "Nome: ".$_GET['txtnome'];
            echo "<br>";
            echo "E-mail: ".$_GET['txtemail'];
            echo "<br>";
            echo "Telefone: ".$_GET['txttelefone'];
            echo "<br>";
            echo "Rg: ".$_GET['txtrg'];
            echo "<br>";
            echo "Total De Diárias: ".$_GET['resposta'];
            echo "<br>";
        ?>
        </div>
</body>
</html>