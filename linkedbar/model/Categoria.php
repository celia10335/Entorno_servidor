<?php 
class Categoria {

	private $id;
	private $nombre;
	private $img;
	private $estado;
	private $orden;
	private $idNegocio;
	
	private array $productos= array(); 
//Acceso a datos
	
	private $conection;	
//Métodos----------------------------
public function __construct($id, $nombre, $img, $estado, $orden, $idNegocio) {
		$this->id=$id;
		$this->nombre=$nombre;
		$this->img=$img;
		$this->estado=$estado;
		$this->orden=$orden;
		$this->idNegocio=$idNegocio;
		$this->getConection();
		$this->getProductos();

	}
public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getProductos(){
	
		

	}
	public function guardar_categoria()
	{
		//insertar en base de datos
	}
}

?>