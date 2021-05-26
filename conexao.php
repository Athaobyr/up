<?php

//-----------------------------------------------------------------------------------------------
// Criar uma Conexão
function abre_conexao()
{
	//	$servername = "200.219.229.27";
	//	$database = "wwwupsis_teste";
	//	$username = "wwwupsis_sacchi";  
	//	$password = "Sacchi1956";
	//	$port	  = '3306';
	//  $conn = mysqli_connect($servername, $username, $password, $database);

	$conn = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DATABASE);

//	mysqli_set_charset($conn,'utf8');

	return $conn;

}
//-----------------------------------------------------------------------------------------------
// Fechar a Conexão
function fecha_conexao($conn)
{
	$conn = null;
//	mysqli_close($conn);
	echo 'fecha conexão na função fecha_conexão' . '<br>';
	return $conn;
}
