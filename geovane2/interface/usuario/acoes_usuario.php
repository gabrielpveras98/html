<?php 
require_once"../../classes/Usuario.php";

$usuario = new Usuario();

$acao = $_POST["acao"];

if($acao == "cadastrar"){
	$usuario->__set("nome", $_POST["nome"]);
	$usuario->__set("email", $_POST["email"]);
	$usuario->__set("senha", $_POST["senha"]);
	
	$usuario->inserir();
}

 ?>