<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de demonstração de sessão</title>
</head>
<body>
<?php
$_SESSION["cor_favorita"] = "verde";
$_SESSION["animal_favorito"] = "gato";
echo "Variáveis de seção estão setadas";
?>
</body>
</html>


