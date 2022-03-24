<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Hotel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <h1 style="text-align: center; margin-top: 100px">Preencha o Formulário</h1>


    <form style="width: 40%; margin: 100px auto;" action="../controle/hotel.controle.php" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">Nome</span>
                    </div>
                    <input type="text" name="txtnome" class="form-control" required autofocus>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">E-mail</span>
                    </div>
                    <input type="text" name="txtemail" class="form-control" required>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">Telefone</span>
                    </div>
                    <input type="text" name="txttelefone" class="form-control" required>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">Rg</span>
                    </div>
                    <input type="number" name="txtrg" class="form-control" required>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">Suíte</span>
                    </div>
                    <select name="txtsuite" style="width: 625px"> 
                        <option value="1">Suíte Single</option>
                        <option value="2">Suíte Double Master</option>
                        <option value="3">Suíte Família</option>
                    </select>    
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" style="width:140px;">Dias</span>
                    </div>
                    <input type="number" name="txtdias" class="form-control" required>
                </div>
            </div>
            <button type="submit" style="width: 100%; height: 50px; margin-top: 50px;" class="btn btn-dark">Registrar</button>
        </form>

</body>
</html>