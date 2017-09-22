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
		}elseif (!$usuario->comprueba_contra()) {
			exit('4');
		}elseif (!$usuario->comprueba_igual()) {
			exit('5');
		}elseif (!$usuario->guardar()) {
			exit('6');
		}else{
			session_start();
			$_SESSION['nombre'] = $nombre;
			$_SESSION['email'] = $email;
			exit('1');
		}
	}

 ?>