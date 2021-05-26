<?php
function Executa_query($query)
{
    $link = abre_conexao();

    //    $pesquisa  = utf8_decode($query);
    $pesquisa  = $query;
    $result = mysqli_query($link, $pesquisa) or die("Erro na função Executa_query em Database.php");
    fecha_conexao($link);
    return $result;
}
