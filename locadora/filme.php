<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <style>
        .foto_do_filme{
            float: left;
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

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 1;
    }

    $query = mysqli_fetch_array(mysqli_query($conexao, "select
       titulo,
       descricao,
       ano_de_lancamento,
       idioma.nome as idioma,
       duracao_da_locacao,
       preco_da_locacao,
       duracao_do_filme,
       custo_de_substituicao,
       classificacao,
       recursos_especiais,
       filme.ultima_atualizacao as ultima_atualizacao,
       filme.filme_id
from
     filme
inner join
         idioma on filme.idioma_id = idioma.idioma_id
where filme_id=".$id.";"));
    echo "
    <div class='coluna-a-6 coluna-b-12'>
        <img src='imagens/foto.png' class='foto_do_filme' alt='foto do filme'><br><br><br>
        <h3>Filme: ".$query["titulo"]."</h3>
        <h3>Descrição: </h3><p>".$query["descricao"]."</p>
        <h3>Atores: </h3>
        ";
        $atores = mysqli_query($conexao, "select
       primeiro_nome, ultimo_nome
from
     ator
inner join
         filme_ator fa on ator.ator_id = fa.ator_id
inner join
         filme f on fa.filme_id = f.filme_id
where f.filme_id=".$query["filme_id"].";");
        $ator = mysqli_fetch_array($atores);
        echo $ator["primeiro_nome"]." ".$ator["ultimo_nome"];
        while ($ator = mysqli_fetch_array($atores)){
            echo ", ".$ator["primeiro_nome"]." ".$ator["ultimo_nome"];
        }
        $categoria = mysqli_fetch_array(mysqli_query($conexao, "select
       categoria.nome
from
     categoria
inner join
         filme_categoria fc on categoria.categoria_id = fc.categoria_id
inner join
         filme f on fc.filme_id = f.filme_id
where f.filme_id = ".$query["filme_id"].";"));
        echo "<h3>Categoria: </h3><p>".$categoria["nome"]."</p>";
        echo "
        <h3>Ano de lançamento: </h3><p>".$query["ano_de_lancamento"]."</p>
        <h3>Idioma: </h3><p>".$query["idioma"]."</p>
        <h3>Duração da locação: </h3><p>".$query["duracao_da_locacao"]." Dias</p>
        <h3>Valor da locação: </h3><p>".$query["preco_da_locacao"]." U$</p>
        <h3>Duração do filme: </h3><p>".$query["duracao_do_filme"]." Minutos</p>
        <h3>Custo de substituição: </h3><p>".$query["custo_de_substituicao"]." U$</p>
        <h3>Classificação: </h3><p>".$query["classificacao"]."</p>
        <h3>Recursos especiais: </h3><p>".$query["recursos_especiais"]."</p>
        <h3>Última atualização: </h3><p>".$query["ultima_atualizacao"]."</p>
        <h3>Estoque: </h3><p>".mysqli_fetch_array(mysqli_query($conexao, "select
       count(filme_id) as quantidade
from
     inventario
where
      filme_id=".$query["filme_id"].";"))["quantidade"]."</p>
    </div>";
    ?>
    <?php include 'aside.php'?>
</div>
<?php include 'footer.php' ?>
</body>
</html>