<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Php formulário sql</title>
    <style>
        form{
            width: 900px;
            margin: auto;
        }

        span{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $email = $comentario = "";
        $nomeErr = $emailErr = "";

        if (!empty($_POST["nome"])) {
            $nome = $_POST["nome"];
        } else {
            $nomeErr = "Campo nome obrigatório";
        }

        if (!empty($_POST["email"])) {
            $email = $_POST["email"];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Formato de email inválido";
            }
        } else {
            $emailErr = "Campo email obrigatório";
        }

        if(!empty($_POST["comentario"])){
            $comentario = $_POST["comentario"];
        }
    }
    ?>
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <fieldset>
            <legend>Preencha o formulário para continuar</legend>
            <span>* Campos obrigatórios</span><br>
            <label for="nome">Nome: </label><br>
            <input type="text" id="nome" placeholder="Digite seu nome aqui..." name="nome" value="<?php echo $nome?>">
            <span>* <?php echo $nomeErr?></span><br>
            <label for="email">E-mail: </label><br>
            <input type="email" id="email" placeholder="Digite seu email aqui..." name="email" value="<?php echo $email?>">
            <span>* <?php echo $emailErr?></span><br>
            <label for="comentario">Comentário: </label><br>
            <textarea id="comentario" placeholder="Digite seu comentário aqui..." name="comentario"><?php echo $comentario?></textarea><br>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>