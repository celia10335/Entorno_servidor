<?php 
class Producto {

	private $id;
	private $nombre;
	private $precio;
	private $img;
	private $estado;
	
	
	private array $etiquetas= array();
//Acceso a datos
	
	private $conection;	
//Métodos----------------------------
public function __construct($id, $nombre, $precio, $img, $estado) {
		$this->id=$id;
		$this->nombre=$nombre;
		$this->img=$img;
		$this->estado=$estado;
		$this->precio=$precio;
		$this->getConection();
		
		$this->getEtiquetas();

	}
public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getEtiquetas(){
	
		

	}
		public function guardar_producto()
	{
		//insertar en base de datos
	}
}

?>