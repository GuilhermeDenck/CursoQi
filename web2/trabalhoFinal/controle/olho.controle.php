<?php


    session_start();


    include "../modelo/olho.class.php";
    include "../dao/olhodao.class.php";
    include "../util/olho.validacao.php";

    switch($_GET['op']){

        case 'cadastrar':
            
            $olho = new Olho();
    
            $olho->nome = $_POST['txtnome'];
            $olho->idade = $_POST['txtidade'];
            $olho->email = $_POST['txtemail'];

         $oDAO = new olhoDAO();
            $oDAO->cadastrarExame($olho);

            $_SESSION['daltonismo'] = serialize($olho);

            header("location:../visao/olho.resposta.php");
           
            echo $olho;



        break;
        // aqui inicia a função consultar
		case 'consultar':
            // instanciar a classe DAO
            $oDAO = new olhoDAO();
            // buscar o array de contatos cadastrados
            $array = array();
            // ativar a função do select * from contato
            $array = $oDAO->buscarContato();

            $_SESSION['daltonismos'] = serialize($array);

            header("location:../visao/olho.consultar.php");

        break;

        case 'deletar':

            if(isset($_REQUEST['codDaltonismo'])){
                     
                $oDAO = new olhoDAO();
                
                $oDAO->deletarContato($_REQUEST['codDaltonismo']);
                header('location:../controle/olho.controle.php?op=consultar');
            }else{ 
                $_SESSION['msg'] = 'Não existe esse código na base de dados.'; 
                //manda para uma página de erro
                //header("location:../visao/guierro.php");
            }//fecha ifelse    
        break;//fecha case deletar

    }// fecha o switch 

        


?>
