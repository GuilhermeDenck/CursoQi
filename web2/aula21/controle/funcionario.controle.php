<?php

    include "../modelo/funcionario.class.php";

    $funcionario =  new Funcionario();

    $funcionario->nome = $_POST['txtnome'];
    $funcionario->cargo = $_POST['txtcargo'];
    $funcionario->matricula = $_POST['txtmatricula'];
    $funcionario->valorHora = $_POST['txtvalorhora'];
    $funcionario->totalHora = $_POST['txttotalhora'];
    $funcionario->turno = $_POST['rdturno'];
    $funcionario->plano = $_POST['plano'];
    $funcionario->tempoDeCasa = $_POST['txttempo']
    
   // echo "<br><h1>Resultado</h1>".$funcionario;

?>