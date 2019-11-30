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
print_r($_SESSION);
//Mudar o conteúdo de uma sessão
$_SESSION["cor_favorita"] = "amarelo";
print_r($_SESSION);

session_unset();//Remover todos as variáveis de sessão
session_destroy();//Destrói a sessão
?>
</body>
</html>


