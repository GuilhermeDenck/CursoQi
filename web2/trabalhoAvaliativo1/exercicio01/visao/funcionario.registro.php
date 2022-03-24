<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Funcionário </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
<body class="p-3 mb-2 bg-dark d-flex ">
    
    
    <div class="container mt-5 text-center " style="text-align: center">
    
        
        
        <form action="../controle/funcionario.controle.php" method="post" >
        <fieldset>    
            
        <h1 class="mt-5"  style="color: white;">Preencha os dados abaixo:</h1>
            <div class="form-group">
                    <h2 style="color: white;"><label for="salarioFixo">Sálario Fixo</label></h2>
                    <div class="input-group mb-3" style="width: 40%;margin:0 auto">
                         <div class="input-group-prepend">
                    </div>
                    <span class="input-group-text">$</span>
                    <input type="number"   name="salarioFixo"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Digite o Salário Fixo:">
                    </div>
                    
            </div>
            <div class="form-group">
                    <h2 style="color: white;"><label for="valorVenda">Valor Da Venda</label></h2>
                    
                    <div class="input-group mb-3" style="width: 40%;margin:0 auto">
                       <div class="input-group-prepend">
                    </div>
                    <span class="input-group-text">$</span>
                    <input type="number" name="valorVenda" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Digite o valor da venda: ">
                    </div>
            </div>
           
            <div class="form-group" >
                    <input type="submit" class="btn btn-light" value="Finalizar">
                    <input type="reset" class="btn btn-secondary" value="Limpar Dados">   
            </div>
        </fieldset>
        </form>
    </div>   



</body>
</html>