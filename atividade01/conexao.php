<?php
require"classes.php";

$primeiro=$_POST["primeiro"];
$segundo=$_POST["segundo"];
$opcao=$_opcao["operacao"];


$calculo=new calculo();
$calculo->setPrimeiro("$primeiro");
$calculo->setSegundo("$segundo");



switch ($opcao) {
	case 'Somar':
		$calculo->somar();
		break;

	case 'Subtrair':
		$calculo->subtrair();
		break;
	
	default:
		# code...
		break;
}


?>