<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <?php include 'head.php';?>
    <style>
        table#tabelaspec {
            border: 1px solid #606060;
            border-spacing: 0;
        }

        table#tabelaspec td{
            border: 1px solid #606060;
            padding: 10px;
            text-align: center;
        }

        table#tabelaspec td.ce{
            color: #FFFFFF;
            background: #606060;
            font-weight: bold;
        }

        table#tabelaspec td.cd{
            background-color: #cececece;
        }

        table#tabelaspec caption{
            color: #888888;
            font-size: 13pt;
            font-weight: bolder;
        }

        table#tabelaspec caption span{
            color: #000000;
            font-size: 8pt;
        }
    </style>
</head>
<body>
<?php include 'header.php'?>
<div class="row">
    <?php include 'nav.php'?>
    <?php
    $servidor = "localhost";
    $user = "root";
    $password = "Valdinete1234";
    $banco = "locadora";

    $conexao = mysqli_connect($servidor, $user, $password, $banco);

    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }else{
        $pagina = 1;
    }
    if(isset($_GET['resultados'])){
        $resultados = $_GET['resultados'];
    }else{
        $resultados = 15;
    }

    $query = mysqli_query($conexao,"select filme_id, titulo, ano_de_lancamento, idioma.nome as idioma, duracao_da_locacao, preco_da_locacao from filme inner join idioma on idioma.idioma_id = filme.idioma_id where filme_id > ".(($pagina - 1)* $resultados)." limit ".$resultados);
    $max = mysqli_fetch_array(mysqli_query($conexao, "select filme_id from filme order by filme_id desc"));
    $maximo = $max['filme_id'];

    echo "
    <div class='coluna-a-6 coluna-b-9'>
        <h1>Criarte locações</h1>
        <table id='tabelaspec'>
            <caption>Tabela De Filmes Disponíveis</caption>
            <tr>
                <td class=\"ce\">Id</td>
                <td class=\"ce\">Título</td>
                <td class=\"ce\">Ano</td>
                <td class=\"ce\">Idioma</td>
                <td class=\"ce\">Duração</td>
                <td class=\"ce\">Preço</td>
                <td class=\"ce\">Ver</td>
            </tr>
            ";
    while ($linha = mysqli_fetch_array($query)){
        echo "<tr><td class='cd'>".$linha["filme_id"]."</td>
        <td class='cd'>".$linha["titulo"]."</td>
        <td class='cd'>".$linha["ano_de_lancamento"]."</td>
        <td class='cd'>".$linha["idioma"]."</td>
        <td class='cd'>".$linha["duracao_da_locacao"]."</td>
        <td class='cd'>".$linha["preco_da_locacao"]."</td>
        <td class='cd'><a href='filme.php?id=".$linha["filme_id"]."'>Link</a></td>
        </tr>";
    }
    echo "
        </table>";
    echo "
    </div>
    ";
    ?>
    <?php include 'aside.php'?>
</div>
<?php
echo "
<div class='row'>
    <div class='coluna-a-3'></div>
    <div class='coluna-a-6 coluna-b-12'>
    ";
if($pagina > 3){
    echo "<a href='locar.php?pagina=1&resultados=$resultados'><<<</a> | ";
}
if($pagina > 2){
    echo "<a href='locar.php?pagina=".($pagina - 2)."&resultados=$resultados'>".($pagina - 2)."</a>";
    echo " | ";
    echo "<a href='locar.php?pagina=".($pagina - 1)."&resultados=$resultados'>".($pagina - 1)."</a> | ";
}else if($pagina == 2){
    echo "<a href='locar.php?pagina=".($pagina - 1)."&resultados=$resultados'>".($pagina - 1)."</a> | ";
}
echo $pagina;
if($pagina < ($maximo / $resultados) - 1){
    echo " | <a href='locar.php?pagina=".($pagina + 1)."&resultados=$resultados'>".($pagina + 1)."</a>";
    echo " | ";
    echo "<a href='locar.php?pagina=".($pagina + 2)."&resultados=$resultados'>".($pagina + 2)."</a>";
}else if($pagina < ($maximo / $resultados)){
    echo " | <a href='locar.php?pagina=".($pagina + 1)."&resultados=$resultados'>".($pagina + 1)."</a>";
}
if($pagina < (($maximo - ($maximo % $resultados - 1)) / $resultados - 1)){
    if($resultados >= 50 || $resultados == 5) {
        echo " | <a href='locar.php?pagina=" . (($maximo - ($maximo % ($resultados))) / ($resultados)) . "&resultados=$resultados'>>>></a>";
    }else{
        echo " | <a href='locar.php?pagina=" . ((($maximo - ($maximo % ($resultados))) / ($resultados))+1) . "&resultados=$resultados'>>>></a>";
    }
}
echo "
        <hr>
        <form method='get' action='locar.php?pagina=$pagina'>
            <fieldset>
                <legend>Filtros</legend>
                <label for='select'>Resultados</label>
                <select id='select' name='resultados'>";
if($resultados == 5){
    echo "<option value='5' selected>5</option>";
}else{
    echo "<option value='5'>5</option>";
}
if($resultados == 15){
    echo "<option value='15' selected>15</option>";
}else{
    echo "<option value='15'>15</option>";
}
if($resultados == 30){
    echo "<option value='30' selected>30</option>";
}else{
    echo "<option value='30'>30</option>";
}
if($resultados == 50){
    echo "<option value='50' selected>50</option>";
}else{
    echo "<option value='50'>50</option>";
}
if($resultados == 100){
    echo "<option value='100' selected>100</option>";
}else{
    echo "<option value='100'>100</option>";
}
echo "          </select>
                <input type='submit' value='Buscar'>
            </fieldset>
        </form>
    </div>
</div>";
?>
<?php include 'footer.php' ?>
</body>
</html>