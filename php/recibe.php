<?php
	require_once("Repaso.php");

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$contra = $_POST["pass"];
	$contra2 = $_POST["pass2"];

	if(empty($nombre) || empty($email) || empty($contra) || empty($contra2)){
		echo '1';
	}else{
		echo'2';
	}

	// $alumno = new Repaso($nombre, $email, $contra, $contra2);

 ?>