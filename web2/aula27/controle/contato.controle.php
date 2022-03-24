<?php


    session_start();


    include "../modelo/contato.class.php";
    include "../dao/contatodao.class.php";

    switch($_GET['op']){
        case 'cadastrar':

            $cont = new Contato();
    
            $cont->nome = $_POST['txtnome'];
            $cont->telefone = $_POST['txttelefone'];
            $cont->email = $_POST['txtemail'];
            $cont->mensagem = $_POST['txtmensagem'];

            $cDAO = new ContatoDAO();
            $cDAO->cadastrarContato($cont);

            $_SESSION['contato'] = serialize($cont);

            header("location:../visao/contato.resposta.php");

            echo $cont;
            break;
    }
    
    echo "Resultado: ".$cont;
?>