<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
</head>
<body>
    
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                  <a class="nav-link" href="#">Sobre</a>
                  <a class="nav-link" href="visao/contato.cadastro.php">Contato</a>
                </div>
              </div>
            </div>
          </nav>
    </header>

    <h1>Faça seu orçamento:</h1>

    <article>
             <!--Aqui vamos criar o formulário   -->

    <form action="../controle/contato.controle.php?op=cadastrar" method="post">

        <div class="form-group">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" class="form-control" name="txtnome" id="formGroupExampleInput" parent="[]" placeholder="Digite seu nome: ">
        </div>
         <div class="form-group">
            <label for="formGroupExampleInput2">Telefone</label>
            <input type="number" class="form-control" name="txttelefone" id="formGroupExampleInput2" parent="[]" placeholder="Digite seu Telefone: ">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="txtemail" id="exampleInputEmail1" parent="[]" placeholder="Digite seu email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="validationTextarea">Mensagem</label>
            <textarea class="form-control" name="txtmensagem" id="validationTextarea" parent  ="[]" placeholder="Digite aqui sua Mensagem" required></textarea>
        </div>
            <button type="submit" class="btn btn-primary">Enviar Dados</button>

    </form>

</body>
</html>