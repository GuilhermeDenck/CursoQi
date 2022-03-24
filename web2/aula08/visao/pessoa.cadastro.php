<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>
<body>  

<h1>Cadastro de  Alunos</h1>

<h3>Preencha o formulário abaixo: </h3>

<form name=" "  action="../controle/pessoa.controle.php"  method="post">

    <input type="text" name="txtnome" placeholder="Digite seu nome: ">
    <input type="number" name="txtidade" placeholder="Digite sua idade: ">

    <input type="text" name="txtrg" placeholder="Digite seu RG: ">
    <input type="number" name="txtpeso" placeholder="Digite seu peso: ">
    <input type="text" name="txtaltura" placeholder="Digite sua altura: ">


    
    <input type="submit" class="btn btn-success" value="CADASTRAR ALUNO">
    <input type="reset" class="btn btn-warning" value="LIMPAR DADOS">

</form>








<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>