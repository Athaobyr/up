<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Cadastro</title>
</head>

<body>
  <h1>Cadastro Genérico</h1>

  <?php
    require('config.php');
    require('conexao.php');
    require('Database.php');

    $conn = abre_conexao();

    $query = "SELECT * FROM pwd";
    $query  = utf8_decode($query);

    $colunas = array();
    $selectColunas = mysqli_query($conn, $query);

    while ($coluna = mysqli_fetch_assoc($selectColunas)) {
      array_push($colunas, $coluna['nome'], $coluna['senha'], $coluna['idsenha']);
      $id   =  $coluna['idsenha'];
      $nome = $coluna["nome"];
      $senha = $coluna["senha"];
      echo $id . '<br>';
      echo $nome . '<br>';
      echo $senha . '<br><hr>';
    }
    $fecha = fecha_conexao($conn);
  ?>

</body>

</html>