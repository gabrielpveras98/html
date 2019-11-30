<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criarte locações</title>
    <script>
        function validaLogin(){
            if(form.usuario.value === ""){
                alert("ERRO, digite um nome de usuário válido");
                form.usuario.focus();
                return false;
            }else if(form.senha.value === ""){
                alert("ERRO, digite uma senha válida");
                form.senha.focus();
                return false;
            }else {
                return true;
            }
        }
    </script>
    <script src="scripts/scripts.js"></script>
    <?php include 'head.php';?>
</head>
<body>
<?php include 'header.php' ?>
<div class="row">
    <?php include 'nav.php'?>
    <div class="coluna-a-6 coluna-b-12">
        <h1 style="color: #0099aa;">Efetue o login para continuar...</h1>
        <form name="form" method="post" action="cadastro.php?id=1" onsubmit="return validaLogin()">
            <fieldset>
                <legend>Login</legend>
                <label for="usuario">Nome de usuário: </label>
                <input id="usuario" name="usuario" type="text"><br>
                <label for="senha">Senha: </label>
                <input id="senha" name="senha" type="password"><br>
                <input type="submit" value="Logar">
            </fieldset>
        </form>
    </div>
    <?php include 'aside.php'?>
</div>
<?php
include "controler/controle.php";
if(isset($_GET['id']) == 1){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $acesso = validarAcesso($usuario, $senha);
    if($acesso){
        $servidor = "localhost";
        $user = "root";
        $password = "Valdinete1234";
        $banco = "locadora";

        $conexao = mysqli_connect($servidor, $user, $password, $banco);

        if(!$conexao){
            echo '<script>alert("ERRO DE CONEXÃO")</script>';
        }else{
            $us = mysqli_query($conexao,'select funcionario_id, primeiro_nome from funcionario where usuario = "'.$usuario.'" and senha = "'.$senha.'";');
            if(mysqli_num_rows($us) > 0){
                $identificador = mysqli_fetch_array($us);
                echo "<script>cadastro(".$identificador['funcionario_id'].")</script>";
                echo "<a href='usuario.php?id=".$identificador['funcionario_id']."'>tralala</a>";
            }else{
                echo "<script>alert('Usuário ou senha incorretos, tente novamente')</script>";
            }
        }
    }else{
        echo "<script>alert('ERRO, usuário ou senha inválidos')</script>";
    }
}
?>
<?php include 'footer.php' ?>
</body>
</html>