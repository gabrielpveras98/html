<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <style>
        .bloco > div{
            background-color: #888888;
            margin: 5px;
            height: 50px;
            padding: 15px 0 0 0;
            width: 200px;
            float: left;
            text-align: center;
        }
        .bloco > div > a{
            color: white;
            text-underline: none;
        }
    </style>
    <?php include 'head.php';?>
</head>
<body>
<?php include 'header.php' ?>
<div class="row">
    <?php include 'nav.php'?>
    <?php
    $servidor = "localhost";
    $user = "root";
    $password = "Valdinete1234";
    $banco = "locadora";

    $conexao = mysqli_connect($servidor, $user, $password, $banco);

    $query = mysqli_query($conexao, 'select primeiro_nome from funcionario where funcionario_id = "'.$_GET['id'].'"');

    $nome = mysqli_fetch_array($query);
    echo "
    <div class='coluna-a-6 coluna-b-12 bloco'>
        <h1>Bem vindo ".$nome['primeiro_nome']."!</h1>
        <div>
            <a href='inserir_filmes.php'>Inserir filmes</a>
        </div>
        <div>
            <a>Cadastrar funcionários</a>
        </div>
        <div>
            <a>Cadastrar clientes</a>
        </div>
        <div>
            <a>Atualizar informações</a>
        </div>
    </div>
        "
    ?>
    <?php include 'aside.php'?>
</div>
<?php include 'footer.php' ?>
</body>
</html>