<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"]:"[Não configurado]";
    $ano = $_GET["ano"];
    $sexo = $_GET["sexo"];
    $idade = date("Y") - $ano;
    echo "$nome tem $idade anos."
?>
<br><a href="tt.html">Voltar</a>
</body>
</html>
