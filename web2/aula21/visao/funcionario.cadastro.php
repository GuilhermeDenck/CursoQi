<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Departamento</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

</head>
<body>

<h1>Dados do Funcionário</h1>



<form name="" action="../controle/funcionario.controle.php" method="post">

    <div class="form-control">
    <input name="txtnome" type= "text" placeholder="Digite o nome:" required autofocus>
    </div>
    <div class="form-control">
        <input name="txtcargo" type="text" placeholder="Digite o cargo: " >
    </div>
    <div class="form-control">
        <input name="txtmatricula" type= "number" placeholder="Digite a matricula:">
    </div>
    <div class="form-control">
        <input name="txtvalorhora" type="text" placeholder="Digite o valor da Hora:  " >
    </div>
    <div class="form-control">
        <input name="txttotalhora" type="text" placeholder="Digite o total de Horaa:  " >
    </div>
    <div class="form-control">
        <input name="txttempo" type="number" placeholder="Digite a quantidade de anos na empresa:  " >
    </div>

    <div class="form-control">
        <select class="form-select" aria-label="Default select example">
            <option selected>Plano de Saúde</option>
            <option value="individual">Individual</option>
            <option value="dependente">Dependente</option>
        </select>

            <div class="form-control">
                 <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdturno" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">Diurno</label>
                </div>
            </div>

            <div class="form-control">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdturno" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2"> Noturno</label>
                </div>
             </div>
      
    <div class="form-control" >
        <input type="submit" class="btn btn-success" value="CALCULAR SALÁRIO">
        <input type="reset" class="btn btn-danger" value="LIMPAR DADOS">
    </div>

</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>