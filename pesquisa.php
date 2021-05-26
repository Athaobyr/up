<?php
    require('config.php');
    require('conexao.php');
    require('Database.php');

    $conn = abre_conexao();

    $query = "SELECT * FROM pwd";
    
    $colunas = array();
    $selectColunas = mysqli_query($conn,$query); 

    while($coluna = mysqli_fetch_assoc($selectColunas)){
      array_push($colunas, $coluna['nome'], $coluna['senha'], $coluna['idsenha'] ) ;
      $id   =  $coluna['idsenha'];
      $nome = $coluna["nome"];
      $senha= $coluna["senha"];
      echo $id.'<br>';
      echo $nome.'<br>';
      echo $senha.'<br><hr>';
    }
    $fecha = fecha_conexao($conn);

?>