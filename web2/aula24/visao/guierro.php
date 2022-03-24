<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tele Entrega Hershey's</title>
	</head>
	<body>
	<br/>
	
	<fieldset>
		<legend>Houve algum erro ao realizar o pedido</legend>
		<?php
		//isset - verificando se a variável possui algum valor ou não 
			
			if( isset($_SESSION['erros']) ){
				// criando uma variável $erros que recebe a função array
				$erros = array();
				
				//descriptografa a variável de sessão erros e armazenando na variável $erros
				$erros = unserialize($_SESSION['erros']);
				
				//mostrando os erros na tela 
				foreach($erros as $e){
					echo '<br />'.$e;
				}
			}//fecha if
		?>		
	</fieldset>
	</body>
</html>





