<?php
// Autor Sacchi
 require_once('config.php');
 require_once('conexao.php');
 require_once('Database.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Cadastro</title>
</head>

<body>
  <h1>Lista PWD</h1>

  <form name="cad-usuario" method="POST" action="cadastro.php">
    <label>Nome: </label>
    <input type="text" name="txtnome" id="nome" placeholder="Nome completo"><br><br>

    <label>Senha: </label>
    <input type="text" name="txtsenha" id="senha" placeholder="Digite sua senha"><br><br>

    <input type="submit" value="Cadastrar" name=cadUsuario><br>

  </form>

  <form action="pesquisa.php">
    <br><input type="submit" value="Listar" name=listar>
  </form>

  <form action="listapwd.php">
    <br><input type="submit" value="Lista Pwd" name=listar>
  </form>

</body>

</html>
