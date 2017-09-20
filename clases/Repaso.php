<?php 

class Repaso {
	private $nombre;
	private $email;
	private $contra;
	private $contra_rep;

	public function _construct($nombre, $email, $contra, $contra_rep){
		$this->nombre = $nombre;
		$this->email = $this->comprueba_mail($mail);
		$this->contra = $this->comprueba_contra($contra);
		$this->contra_rep = $this->comprueba_igual($contra, $contra_rep);
	}

	public function comprueba_mail($mail){
		
	}

	public function comprueba_contra($contra){

	}

	public function comprueba_igual($contra, $contra2){

	}
}

 ?>