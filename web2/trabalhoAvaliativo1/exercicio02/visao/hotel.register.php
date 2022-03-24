<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Hotel Reservation</title>
</head>
<body class="bg-dark">
    <h1 style="text-align: center; margin-top: 100px;color: white;">Reserva Do Hotel</h1>
    <form style="width: 40%; margin: 100px auto;" action="../controle/hotel.controle.php" method="post">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Quantidade de Dias</span>
                </div>
                <input type="number" name="inputdays" class="form-control">
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Numero de Crianças</span>
                </div>
                <input type="number" name="inputchildren" class="form-control">
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Fim de semana?</span>
                </div>
                <select name="inputweekend" style="width: 76.5%;">
                    <option value="1">Sim</option>
                    <option value="2">Não</option>
                </select>
            </div>
        </div>
        <button type="submit" style="width: 100%; height: 50px; margin-top: 50px;" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>