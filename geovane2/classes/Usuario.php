<?php 
require_once "Conexao.php";

class Usuario{
	private $nome;
	private $email;
	private $senha;

	public function __get($atributo){
		return $this->$atributo;
	}
	public function __set($atributo, $valor){
		$this->$atributo = $valor;
	}

	public function inserir(){
		$con = new Conexao();
		$conexao = $con->conectar();

		$sql = "insert into usuario(nome, email, senha) 
				values('$this->nome', '$this->email', '$this->senha')";

		$query = mysqli_query($conexao, $sql);

		if ($query) {
			echo "Cadastrado com suscesso.";
		} else {
			echo "Cadastrado não Realizado.";
		}
		
			
	}

}
 ?>