<?php
class calculo{
	private $primeiro;
	private $segundo;
	private $resultado;

	function setPrimeiro($parametro_primeiro){
		$this->primeiro=$parametro_primeiro;
	}

	function setSegundo($parametro_segundo){
		$this->segundo=$parametro_segundo;
	}

	function somar(){
		$this->resultado=$this->primeiro+$this->segundo;
	}

	function subtrair(){
		$this->resultado=$this->primeiro-$this->segundo;
	}

	function multiplicar(){
		$this->resultado=$this->primeiro*$this->segundo;
	}

	function dividir(){
		$this->resultado=$this->primeiro/$this->segundo;
	}

	function getResultado(){
		return $this->resultado;
	}

}




?>