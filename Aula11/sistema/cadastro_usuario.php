<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$sql = 'insert into teste (nome, email, senha) values("'.$nome.'", "'.$email.'", "'.$senha.'")';

$executa = mysqli_query($conexao, $sql);

if($executa){
    echo "<h1>Cadastro realizado com sucesso!</h1>";
}else{
    echo "<h1>Cadastro não realizado</h1>";
}
?>