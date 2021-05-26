<?php
	require('config.php');
	require('conexao.php');
	require('Database.php');
	//header("Content-Type: text/html; charset=ISO-8859-1", true);
	echo '<h1>'.'Cadastro!'.'</h1><br><br>';

	if (empty($_POST['txtnome'])){
		echo 'Nome inválido!'.'</br>';
		header('index.php');
	}

	if (empty($_POST['txtsenha'])){
		echo 'Senha inválida!'.'</br>';
		header('index.php');
	}

	if (!empty($_POST['txtnome']) && !empty($_POST['txtsenha']) ){
		
	 	
		$nome	= $_POST['txtnome'];
		$senha  = $_POST['txtsenha'];
		$conn = abre_conexao();

		$query  = "INSERT INTO pwd (nome, senha) VALUES ('$nome', '$senha')";
		
		try{
			Executa_query($query);
		
		} catch (PDOException $e) {
			echo 'erro';
		}
			
		$fecha = fecha_conexao($conn);

		if (!$fecha) {
			echo "Confirmado o fechamento" . '<br>';
		}else{
			echo 'conexao ainda aberta!'. '<br>';
		}

		 echo 'O nome incluído é '.$nome.'<br>'.' e a senha é '.$senha.'<br>';
		}
	
	else{
		echo 'Nome ou senha inválidos'.'<br>';
	}
	
	echo '<a href="index.php">Voltar</a>';

?>


