<?php

    include "aluno.class.php";

    $aluno = new Aluno();

    $aluno->setNota1(8);
    $aluno->setNota2(8);

    echo '<h1>Resultados: </h1>';

    echo '<p>Nota 1: '.$aluno->getNota1().'</p>';
    echo '<p>Nota 2: '.$aluno->getNota2().'</p>';

    echo '<p>Status: '.$aluno->verificarConceito().'</p>';
    

?>