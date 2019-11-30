<?php
require "classes/usuario.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $tipo = $_GET["tipo"];
    if ($tipo == 2){//Deletar
        $usuario = new usuario();
        $usuario->deletar($_GET["id"]);
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de usuários</title>
    <link rel="stylesheet" href="recursos/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron text-center">
    <h1 class="display-1">Usuários</h1>
</div>
<div class="container">
    <table class="table table-striped table-hover table-dark">
        <thead>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Senha</td>
            <td>Ações</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $usuario = new usuario();
        foreach ($usuario->listar() as $linha) {
            echo "
            <tr>
                <td>".$linha["nome"]."</td>
                <td>".$linha["email"]."</td>
                <td>".$linha["senha"]."</td>
                <td><a href='alterar.php?id=".$linha["id"]."&tipo=1' class='btn btn-success'>Alterar</a></td>
                <td><a href='".$_SERVER["PHP_SELF"]."?id=".$linha["id"]."&tipo=2' class='btn btn-danger'>Deletar</a></td>
            </tr>
        ";
        }
        ?>
        </tbody>
    </table>
    <a href="cadastro.php" class="btn bg-warning">Cadastrar</a>
</div>
<script src="recursos/js/bootstrap.min.js"></script>
<script src="recursos/js/jquery.min.js"></script>
<script src="recursos/js/popper.min.js"></script>
</body>
</html>