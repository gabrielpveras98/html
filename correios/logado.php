<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem vindo</title>
    <?php include 'php/head.php'?>
</head>
<body>
<div id="pagina">
    <?php include 'php/header.php'?>
    <div class="row">
        <div class="col-lg-8">
            <form method="get" action="consulta.php">
                <h2>Busca</h2>
                <fieldset>
                    <legend>Tabelas</legend>
                    <label for="tabela_bairro">Bairro</label>
                    <input id="tabela_bairro" title="bairro" type="checkbox" name="Bairro">
                    <label for="tabela_cidade">Cidade</label>
                    <input id="tabela_cidade" title="cidade" type="checkbox" name="cidade">
                    <label for="tabela_endereco">Endereço</label>
                    <input id="tabela_endereco" title="endereco" type="checkbox" name="endereco">
                    <label for="tabela_paises">Países</label>
                    <input id="tabela_paises" title="paises" type="checkbox" name="paises">
                    <label for="tabela_uf">Uf(estado)</label>
                    <input id="tabela_uf" title="uf" type="checkbox" name="uf">
                    <br>
                </fieldset>
                <h2>Nomes dos campos</h2>
                <fieldset>
                    <legend>Campos das tabelas</legend>
                    <label for="nomes">Query</label>
                    <textarea id="nomes" placeholder="Query"></textarea>
                    <button onclick="alert('Digite o nome da tabela, seguido por (.) e os campos desejados(* seleciona todos)')">?</button>
                </fieldset>
                <input type="submit" value="Buscar">
            </form>
        </div>
        <div class="col-lg-4">
            <h2>Asside</h2>
        </div>
    </div>
    <?php include 'php/footer.php'?>
</div>
</body>
</html>