<?php

    include "../modelo/aluno.class.php";

    $aluno = new Aluno();


    $aluno->setNome($_POST['txtnome']);
    $aluno->setRa($_POST['txtra']);
    $aluno->setNota1($_POST['txtnota1']);
    $aluno->setNota2($_POST['txtnota2']);

    echo "<h1>Nome: {$aluno->getNome()}"."</h1>". 
         "<h2>RA:  {$aluno->getRa()}"."</h2>".
         "<h2>Nota 1: {$aluno->getNota1()}"."</h2>".
         "<h2>Nota 1: {$aluno->getNota1()}"."</h2>".
         "<h2>Média : {$aluno->calcularMedia()}"."</h2>".
         "<h2>Disciplina : {$aluno->getDisciplina()}"."</h2>".
         "<h2>Conceito : {$aluno->verificarConceito()}"."</h2>".
         "<h2>Parecer : {$aluno->getParecer()}"."</h2>";
?>