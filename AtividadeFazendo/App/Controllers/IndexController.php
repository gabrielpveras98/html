<?php 
namespace App\Controllers;

class IndexController{
	
	public function render($view){
		require_once"App/Views/index/".$view.".phtml";
	}

	public function index(){
		$this->render('index');
	}
	public function sobrenos(){
		$this->render('sobreNos');	
	}
	public function cadastroDeClientes(){
		$this->render('cadastroDeClientes');
	}
}

 ?>
