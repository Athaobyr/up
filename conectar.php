<?php

require('config.php');
require('conexao.php');
require('Database.php');

$name = 'sacchi';
$servername = '200.219.229.27';
$database = 'wwwupsis_teste';
$username = 'wwwupsis_sacchi';  
$password = 'Sacchi1956';
$port	  = '3306';


try {
 
    $conn = new PDO(
        'mysql:'.
        'host='.MYSQL_SERVER.';'.
        'dbname='.MYSQL_DATABASE.';'.
        'charset='.MYSQL_CHARSET,
        MYSQL_USER,
        MYSQL_PASS,
        array(PDO::ATTR_PERSISTENT => true)
    );    
  
  
    //  $conn = new PDO("mysql:host=$servername;dbname=$database", $username,  $password);
	
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $conn->query('SELECT * FROM pwd where idsenha>=1');

    foreach($data as $row) {
        print_r($row);
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

$conn = null;
echo 'conexão fechada';
?>