<?php 

class Usuario {
	private $nombre;
	private $email;
	private $contra;
	private $contra_rep;

	public function __construct($nombre, $email, $contra, $contra_rep){
		$this->nombre = $nombre;
		$this->email = $email;
		$this->contra = $contra;
		$this->contra_rep = $contra_rep;
	}

	public function __get($atributo){
		if(property_exists(__CLASS__, $atributo)) {
			return $this->$atributo;
		}else{
			return NULL;
		}
	}

	public function comprueba_mail(){
		if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
    		return true;
		}else{
			return false;
		}
	}

	public function comprueba_contra(){
		if(strlen($this->contra) <8 || strlen($this->contra) >10 ){
			return false;
		}else{
			return true;
		}
	}

	public function comprueba_igual(){
		if(strcasecmp($this->contra, $this->contra_rep) == 0){
			return true;
		}else{
			return false;
		}
	}

	public function guardar(){
		try{
			$mbd = new PDO('mysql:host=localhost;dbname=usuario', 'marcos','micus1912',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}catch(PDOException $e){
			return false;
			exit;
		}

		try{
			// hasheamos la contraseña para poder guardarla
			$contra_hash = password_hash($this->contra,PASSWORD_DEFAULT);
			// abrimos la conexion con transacciones
			$mbd->beginTransaction();
			// usamos consultas preparadas
			$consulta1 = $mbd->prepare("INSERT into usuario (nombre,email,passw) VALUES (:nombre, :email, :passw)");
			$consulta1->bindParam(':nombre', $this->nombre);
			$consulta1->bindParam(':email', $this->email);
			$consulta1->bindParam(':passw', $contra_hash);
			$consulta1->execute();
			$mbd->commit();
			return true;
		}catch(PDOException $e){
				$mbd->rollBack();
				return false;
			}
		}
	}

 ?>