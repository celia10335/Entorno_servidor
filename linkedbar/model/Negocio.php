<?php 
class Negocio {

	private $id;
	private $nombre;
	private $email;
	private $telefono;
	private $direccion;
	private $activo;
	private $cif_nif;
	private array $categorias = array(); // array de objetos categoria del negocio
	private array $empleados = array(); //array de objetos gestor asociados al negocio cuyo rol=2
//Acceso a datos
	
	private $conection;	
//Métodos----------------------------
public function __construct($id, $nombre, $email, $telefono, $direccion, $activo, $cif_nif) {
		$this->id=$id;
		$this->nombre=$nombre;
		$this->email=$email;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->activo=$activo;
		$this->cif_nif=$cif_nif;
		$this->getConection();
		$this->getCategorias();
		$this->getEmpleados();

	}
public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getCategorias(){
	
		

	}
	public function getEmpleados(){
	
		

	}
}

?>