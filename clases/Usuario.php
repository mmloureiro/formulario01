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

	public function comprueba_contra($contra){

	}

	public function comprueba_igual($contra, $contra2){

	}
}

 ?>