<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <?php include 'head.php';?>
</head>
<body>
<?php include 'header.php' ?>
<div class="row">
    <?php include 'nav.php'?>
    <div class="coluna-a-6 coluna-b-9">
        <h1>Criarte locações</h1>
        <h2>Nossas lojas: </h2>
        <?php
        $servidor = "localhost";
        $user = "root";
        $password = "Valdinete1234";
        $banco = "locadora";

        $conexao = mysqli_connect($servidor, $user, $password, $banco);

        $query = mysqli_query($conexao, "select
       loja_id as id,
       endereco.endereco,
       endereco.bairro,
       endereco.cep,
       endereco.telefone,
       endereco.endereco2,
       cidade,
       pais
from
     loja
inner join
         endereco on loja.endereco_id = endereco.endereco_id
inner join
         cidade c on endereco.cidade_id = c.cidade_id
inner join
         pais p on c.pais_id = p.pais_id;");

        while ($linha = mysqli_fetch_array($query)){
            echo "<h3>Loja: </h3><p>".$linha['id']."</p>";
            echo "<h3>Endereço: </h3><p>".$linha['endereco']."</p>";
            echo "<h3>Bairro: </h3><p>".$linha['bairro']."</p>";
            echo "<h3>CEP: </h3><p>".$linha['cep']."</p>";
            echo "<h3>Telefone: </h3><p>".$linha['telefone']."</p>";
            echo "<h3>Endereço2: </h3><p>".$linha['endereco2']."</p>";
            echo "<h3>Cidade: </h3><p>".$linha['cidade']."</p>";
            echo "<h3>País: </h3><p>".$linha['pais']."</p>";
            echo "<hr>";
        }
        ?>
    </div>
    <?php include 'aside.php'?>
</div>
<?php include 'footer.php' ?>
</body>
</html>