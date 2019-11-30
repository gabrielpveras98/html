<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Testes</title>
</head>
<body>
<?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo "A raiz de $valor é ".number_format($rq, 2);
?>

<br><a href="Aula08.html">Voltar</a>

</body>
</html>

