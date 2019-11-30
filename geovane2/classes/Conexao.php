<?php 
class Conexao{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "";
	private $banco = "bdaula05";

	public function conectar(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->banco);

		return $conexao;
	}

	

}


 ?>