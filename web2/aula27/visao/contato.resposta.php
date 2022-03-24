<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
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

    <article style="margin-left:3%;">
        <fieldset style="border: 1px solid #999; padding: 10px; width:60%">
        <h1>Agradecemos o seu contato:</h1>
             <!--Aqui vamos imprimir as informações dos contatos cadastrados   -->
             <?php
                //verificando se nas variáveis há algum registro
                if(isset($_SESSION['contato']) ){

                    include '../modelo/contato.class.php';
                    $cont = new Contato();

                //descriptografa a variável contato e armazena no $cont
                    $cont = unserialize( $_SESSION['contato'] );

                //mostrando o resultado da variável tele e da variável de sessão cont
                    echo '<br /><br/><br/>'.$cont;// toString();
                }
        ?>
        </fieldset>
        </article>
        

</body>
</html>