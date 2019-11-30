<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questão 10</title>
</head>
<body>
<form method="post" action="index.php">
    <fieldset>
        <legend>Formulário de acesso</legend>
        <label for="nome">Nome:</label>
        <input type="text" id="nome"><br>
        <label for="endereco">Endereço:</label>
        <input id="endereco" type="text"><br>
        <label for="cidade">Cidade:</label>
        <input id="cidade" type="text"><br>
        <label for="estado">Estado:</label>
        <select id="estado">
            <?php
            $servidor = '162.241.2.188';
            $usuario = 'si3pif51_pereira';
            $senha = 'gabriel1234';
            $banco = 'si3pif51_pereira';

            $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
            //$estados = mysqli_fetch_array(mysqli_query($conexao, "select nome, id from estado order by nome asc limit 15"));
            //while ($linha = $estados){
                //echo "<option value='".$linha['id']."'>".$linha['nome']."</option>";
            //}
            ?>
        </select><br>
        <label for="cep">CEP:</label>
        <input id="cep" type="text"><br>
        <label for="email">Email:</label>
        <input type="email" id="email"><br>
        <label for="telefone">Telefone:</label>
        <input id="telefone" type="number"><br>
        <label for="sexo">Sexo:</label>
        <select id="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select><br>
        <label for="tipo">Tipo de usuário:</label>

        <label for="senha">Senha:</label>
        <input type="password" id="senha"><br>
        <input type="submit" value="Cadastrar">
    </fieldset>
</form>
<?php

?>
</body>
</html>