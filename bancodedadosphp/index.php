<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco de dados em php</title>
    <style>
        body{
            text-align: center;
        }
        body > div{
            height: 100px;
            margin: auto;
            background-color: aqua;
            width: 50%;
            padding: 25px 0 0 0;
        }
        body > div > a{
            color: #404040;
            font-size: 20px;
        }
    </style>
</head>
<body>
<h1>Escolha uma das opções de banco de dados: </h1>
<div>
    <a href="mysqli.php">MySQLi</a><br>
    <a href="mysqlioo.php">MySQLi orientado a objetos</a><br>
    <a href="pdo.php">PDO</a>
</div>
</body>
</html>