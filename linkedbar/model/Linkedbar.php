<?php
class Linkedbar{
	//Acceso a BD-----------------------
	private $table='negocio';
	private $conection;
	private array $negocios = array();

function __construct() {
	$this->getConection();
}


		/* Set conection */
public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

public function getNegocios(){
	
		

		$sql = "SELECT * FROM ".$this->table;
		$result = $this->conection->query($sql);
		
		if($result->num_rows>0)
		{
			$i=0;
			while($row=$result->fetch_assoc())
			{
				$this->$negocios[$i]=new Negocio($row['id'], $row['nombre'], $row['email'],$row['tlf'], $row['direccion'], $row['activo'], $row['cif_nif']);
				$i++;
			}
		}
		

		return $this->$negocios;

	}

public function verNegocioPorId($id){
		if(is_null($id)) return false;
		
		$sql = "SELECT * FROM ".$this->table. " WHERE idNegocio = $id";
		$result = $this->conection->query($sql);
		$row=$result->fetch_assoc();
		$negocio=new Negocio($row['id'], $row['nombre'], $row['email'],$row['tlf'], $row['direccion'], $row['activo'], $row['cif_nif']);

		return $negocio;
	}	

public function login($password, $email){
}
}
?>