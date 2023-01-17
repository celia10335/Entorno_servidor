<?php 


require_once 'model/Linkedbar.php';
require_once 'model/Negocio.php';
require_once 'model/Categoria.php';
require_once 'model/Producto.php';
require_once 'model/Etiqueta.php';

class cliente{
	
	public $view;
	private $linkedbar;
	

	public function __construct() {
		$this->view = 'web';
		$this->linkedbar = new Linkedbar();
		
	}

	public function web()
	{
		$this->view = 'web';

	}
	public function listarNegocios(){
		$this->view = 'listarNegocios';
	
		return $this->linkedbar->getNegocios();
	}
	public function verNegocio($idNegocio=null){
		$this->view = 'negocio';
		if(isset($_GET["id"])) $idNegocio = $_GET["id"];
		$negocio=$this->linkedbar->verNegocioPorId($idNegocio);


		return $negocio;
	}
	public function verMenu($idNegocio=null){
		$this->view = 'menu';
		if(isset($_GET["id"])) $idNegocio = $_GET["id"];
		$negocio=$this->linkedbar->verNegocioPorId($idNegocio);
		
		return $negocio;
		
	}


}

?>