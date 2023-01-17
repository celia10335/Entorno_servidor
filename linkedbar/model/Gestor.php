<?php 
class Gestor {

	private $idGestor;
	private $nombre;
	private $apellido1;
	private $apellido2;
	private $dni;
	private $password;
	private $telefono;
	private $email;
	private $direccion;
	private array $idNegocios = array(); // Array de negocios con los que está asociado
	
//Acceso a datos
	
	private $conection;	
//Métodos----------------------------
public function __construct($idGestor, $nombre, $apellido1, $apellido2, $dni, $password, $telefono, $email, $direccion) {
		$this->idGestor=$idGestor;
		$this->nombre=$nombre;
		$this->apellido1=$apellido1;
		$this->apellido2=$apellido2;
		$this->dni=$dni;
		$this->password=$password;
		$this->telefono=$telefono;
		$this->mail=$mail;
		$this->direccion=$direccion;
		$this->getConection();
		
		

	}
public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}
	public function getNegocios(){
	
		

	}

	public function guardarUsuario(){

	//insertar en base de datos
		

	}
		public function logearUsuario($password, $email){

	//comprobar en la base de datos
	//si ok guardar objeto gestor en una variable de sesión y return ok
	//si error return error	
		

	}
		public function guardarEdicion(){

	//editar en base de datos
		

	}
}

?>