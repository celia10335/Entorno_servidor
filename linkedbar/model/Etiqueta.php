<?php 
class Etiqueta {

	private $id;
	private $nombre;
	private $alergeno;
	
//Métodos----------------------------
public function __construct($id, $nombre, $alergeno) {
		$this->id=$id;
		$this->nombre=$nombre;
		$this->alergeno=$alergeno;
	

	}

}

?>