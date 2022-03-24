<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="../Página-Inicial.css" media="screen">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/consultar.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.6.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <title class=>Consulta</title>

        <style type="text/css">

            .resultado{
                margin-left:3%;
                margin-right:2%;
                padding-top:2%;
            }

    </style>
</head>
<body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body">
<header class="u-clearfix u-header u-header" id="sec-1337"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="index.html" class="u-image u-logo u-image-1"></a>
          <img src="../images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../index.html" style="padding: 10px 20px;">Página Inicial</a>
             </li>
             <li class="u-nav-item">
               <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="olho.cadastro.php" style="padding: 10px 20px;">Teste</a>
            </li>
            <li class="u-nav-item">
              <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Exames Cadastrados</a>
           </li>
           <li class="u-nav-item">
            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="olho.deletar.php" style="padding: 10px 20px;">Remover Exame</a>
         </li>
          </ul>
          </div>
        </nav>
      </div>
    </header>
       

        <article>

            <h1 class="titulo1">Exames Cadastrados:</h1>

                <div class="resultado">
                    <?php
                    //verificando se nas variáveis há algum registro
                        if( isset($_SESSION['daltonismos'])){

                            include_once '../modelo/olho.class.php';

                            $olho = array();

                        //descriptografa a variável contato e imprimir todos os contatos na tela
                            $olho = unserialize( $_SESSION['daltonismos'] );


                            echo '<table class= "table table-striped table hover">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Idade</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>';


                                    //mostrando o resultado da variável tele e da variável de sessão cont
                            foreach ($olho as $olho) {

                                    echo "<tr>";
                                    echo '<td>'.$olho->codDaltonismo.'</td>';
                                    echo '<td>'.$olho->nome.'</td>';
                                    echo '<td>'.$olho->idade.'</td>';
                                    echo '<td>'.$olho->email.'</td>';
                                    echo '</tr>';
                                    // echo '<br>Cliente<br>'.$olho.'<br><br>';
                            }
                            }else{
                                    echo 'Não existe exames cadastrados...';
                            }
                            ?>
                                </tbody>
                            </table>


                </div>

            
        </article>
         


    <div class="footer">                       
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-37bf"><div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1"></p>
    </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
     <p>Trabalho Feito por Guilherme Denck e Rafael Santini </p>
     <br>
     <p>guidenck0303@gmail.com / rafaelfarias.santini14@gmail.com</p>
    </section>
    </div> 


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        
</body>
</html>