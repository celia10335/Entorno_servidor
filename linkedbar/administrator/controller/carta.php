<?php 


require_once '../model/Linkedbar.php';
require_once '../model/Negocio.php';
require_once '../model/Categoria.php';
require_once '../model/Producto.php';
require_once '../model/Etiqueta.php';
require_once '../model/Gestor.php';


class carta{
	
	public $view;
	private $linkedbar;
	

	public function __construct() {
		$this->view = 'gestionar_menu';
		$this->linkedbar = new Linkedbar();
		
	}


	public function gestionarMenu($idNegocio=null){
		$this->view = 'gestionar_menu';
		if(isset($_GET["id"])) $idNegocio = $_GET["id"];
		$negocio=$this->linkedbar->verNegocioPorId($idNegocio);
		
		return $negocio;
		
	}
public function crear_categoria(){
		$this->view = 'form_categoria'; 
		
	}
public function guardar_categoria(){
		$this->view = 'categoria_insertada';

		$Gestor=new Categoria();//pasar por argumento el post del formulario
		
		return $Categoria->guardar_categoria();

	}

public function crear_producto(){
		$this->view = 'form_producto'; 
		
	}
public function guardar_producto(){
		$this->view = 'producto_insertado';

		$producto=new Producto();//pasar por argumento el post del formulario
		
		return $producto->guardar_producto();

	}	

}

?>