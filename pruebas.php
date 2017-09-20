<?php 
require_once("clases/Usuario.php");

$usuario = new Usuario('marcos', 'holagmailcom', 'hola', 'hola');

if($usuario->comprueba_mail()){
	echo "hola";
}else{
	echo "adios";
}

echo '<br>';
if(filter_var('holahotmail.com', FILTER_VALIDATE_EMAIL)){
	echo "hola";
	}else{
	echo "adios";
}
 ?>