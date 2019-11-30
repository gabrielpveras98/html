<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
echo "Cor favorita: ".$_SESSION["cor_favorita"]."<br>";
echo "Animal favorito: ".$_SESSION["animal_favorito"]."<br>";
?>
</body>
</html>


