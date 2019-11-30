<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
    $n = $_GET["num"];
    for($c = 1; $c <= 10; $c++){
        echo "$n X $c = ".($n * $c)."<br>";
    }
?>
<a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
