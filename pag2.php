<?php
$_POST['N1'];
$_POST['N2'];
$_POST['OP'];
$r = 0;	
	switch($_POST['OP']){
		case "multiplicacao":
		
		$r = $_POST['N1']*$_POST['N2'];
		echo $r;
		break;
		case "divisao":
		$r = $_POST['N1']/$_POST['N2'];
			echo $r;
		break;
		case "adicao":
		$r = $_POST['N1']+$_POST['N2'];
		echo $r;
		break;
		case "subtracao":
		$r = $_POST['N1']-$_POST['N2'];
			echo $r;
		break;
		default:
echo "Digite apenas nъmeros e uma operaзгo";
}
?>