<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
<?php
    $numero = $_GET["num"];
    $multiplicador = 1;
    do{
        echo "$numero X $multiplicador = ".($numero * $multiplicador);
        echo "<br>";
        $multiplicador++;
    }while ($multiplicador <= 10);
?>
<br>
<a href="aula11.html">Voltar</a>
</body>
</html>
