<?php
	require_once("../clases/Usuario.php");

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$contra = $_POST["pass"];
	$contra2 = $_POST["pass2"];

	if(empty($nombre) || empty($email) || empty($contra) || empty($contra2)){
		exit('2');
	}else{
		$usuario = new Usuario($nombre, $email, $contra, $contra2);
		if(!$usuario->comprueba_mail()){
			exit('3');
		}else{
			exit('1');
		}
	}

 ?>