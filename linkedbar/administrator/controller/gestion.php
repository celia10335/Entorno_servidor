<?php 


require_once '../model/Linkedbar.php';

require_once '../model/Negocio.php';
require_once '../model/Categoria.php';
require_once '../model/Producto.php';
require_once '../model/Etiqueta.php';
require_once '../model/Gestor.php';

class gestion{
	
	public $view;

	

	public function __construct() {
		$this->view = 'login';
	
		
	}

	public function login()
	{
		$this->view = 'login';


	}
	public function logearUsuario()
	{
		$logeo=$this->linkedbar->login($POST['password'], $POST['email']);
		if($logeo)
		{
			$this->view = 'verGestor';
		}else{
			$this->view = 'login';
		}
		
		//return $logeo;


	}
	public function crear_usuario(){
		$this->view = 'form_usuario'; 
		
	}
	public function guardar_usuario(){
		$this->view = 'usuario_insertado';

		$Gestor=new Gestor($POST['idGestor'], $POST['nombre'], $POST['apellido1'], $POST['apellido2'], $POST['dni'], $POST['password'], $POST['telefono'], $POST['email'], $POST['direccion']);
		
		return $Gestor->guardar_usuario();

	}
	public function olvido(){
		$this->view = 'olvido';
	}
	public function verGestor(){
		$this->view = 'verGestor';
	}
	public function editarGestor(){
		$this->view = 'editar_usuario';
	}
	
	public function guardar_edicion(){
		$this->view = 'usuario_editado';

		$Gestor=new Gestor($POST['idGestor'], $POST['nombre'], $POST['apellido1'], $POST['apellido2'], $POST['dni'], $POST['password'], $POST['telefono'], $POST['email'], $POST['direccion']);
		
		return $Gestor->guardar_edicion();

	}
	

}


?>