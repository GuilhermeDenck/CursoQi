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
    
        
        
        <form action="../controle/locacao.controle.php" method="post" >
        <fieldset>    
        <h1 class="mb-3">Preencha os dados abaixo:</h1>


            <div class="form-group " >
                    <h2><label for="nomedoveiculo">Nome Do Cliente</label></h2>
                    <input type="text" name="txtnomecliente" id="nomedocliente" placeholder="Digite o Nome: " required autofocus>
                    
            </div>
            <div class="form-group " >
                    <h2><label for="cpf">CPF</label></h2>
                    <input pattern="\d{3}.\d{3}.\d{3}-\d{2}" type="text" name="txtcpf" id="cpf" placeholder="Digite o CPF: " required> 
            </div>

            <div class="form-group " >
                    <h2><label for="cpf">Idade</label></h2>
                    <input pattern="\d{1,3}" type="number" name="txtidade" id="idade" placeholder="Digite a sua Idade: " required> 
            </div>

            <div class="form-group " >
                    <h2><label for="nomedoveiculo">Modelo De Veiculo</label></h2>
                    <select name="txtmodeloveiculo" id="modeloveiculo">
                          <option> SUV </option>  
                          <option> ESPORTIVO </option>  
                    </select>
                    
            </div>
            
            <div class="form-group">
                    <h2><label for="valorlocacao">Valor Da Locação</label></h2>
                    <input type="number" name="txtlocacao" id="valorlocacao" placeholder="Valor Da Locação: ">
            </div>
            
            <div class="form-group">
                    <h2><label for="diarias">Quantidade de Diárias</label></h2>
                    <input type="number" name="txtdiarias" id="diarias" placeholder="Quantidade de Diárias: ">
            </div>
            
            <div class="form-group">
                    <h2><label for="tipodeveiculo">Tipo de Veículo</label></h2>
                    <select name="txttipoveiculo" id="tipodeveiculo">
                          <option value="passeio"> Passeio </option>  
                          <option value="executivo"> Executivo </option>  
                    </select>
            </div>
            <div class="form-group">
                <h2><label for="tipodecombustivel">Selecione o tipo de Combustivel</label></h2>
                <select name="txttipodecombustivel" id="tipodeveiculo">
                      <option value="GNV"> GNV </option>  
                      <option value="Gasolina"> Gasolina </option>  
                </select>
           </div>
            <div class="form-group" >
                    <input type="submit" class="btn btn-success" value="Finalizar">
                    <input type="reset" class="btn btn-warning" value="Limpar Dados">   
            </div>

        </fieldset>
        </form>
    </div>   




</body>
</html>