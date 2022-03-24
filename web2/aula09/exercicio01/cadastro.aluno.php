<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 1 - Aluno</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class="p-3 mb-2 bg-dark">

  
  <div class="jumbotron m-3" >
  
    <legend>Preencha os dados abaixo:</legend>
    <form action="./controle/aluno.controle.php" method="post">
        <div class="form-group">
            <input type="text" name="txtnome" placeholder="Digite o nome: ">
        </div>
        <div class="form-group">
            <input type="number" name="txtra" placeholder="Digite o RA: ">
        </div>
        <div class="form-group">
            <input type="number" name="txtnota1" placeholder="Digite a Nota 1: ">
        </div>
        <div class="form-group">
            <input type="number" name="txtnota2" placeholder="Digite a nota 2: ">
        </div>
        <div class="form-group">
            <select name="disciplina" id="">
                <option>Linguagem Java</option>
                <option>Lógica de Programação</option>
                <option>Sistemas Operacionais</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="parecer" id="" cols="30" rows="5" placeholder="Digite o parecer do aluno:"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Calcula Média">
            <input type="reset" class="btn btn-warning" value="Limpar dados">
        </div>
    
    </form>
  
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>