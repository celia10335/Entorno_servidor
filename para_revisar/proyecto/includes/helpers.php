<?php

// Muestra los errores que nos devuelven en la sesión.

function mostrarError($errores, $campo){
	$alerta = '';
	if(isset($errores[$campo]) && !empty($campo)){
		$alerta = "<div class='alerta alerta-error'>".$errores[$campo].'</div>';
	}
	
	return $alerta;
}

// Elimina los errores de la sesión

function borrarErrores(){
	$borrado = false;
	
	if(isset($_SESSION['errores'])){
		$_SESSION['errores'] = null;
		$borrado = true;
	}
	
	if(isset($_SESSION['errores_entrada'])){
		$_SESSION['errores_entrada'] = null;
		$borrado = true;
	}
	
	
	return $borrado;
}

// Obtiene todos los alumnos de la BBDD

function obtenerClientes($conexion){
    
    $sql = "SELECT * FROM cliente ORDER BY idCliente ASC;";
    $cliente = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($cliente && mysqli_num_rows($cliente) >= 1){
        $resultado = $cliente;
    }
    
    return $resultado;
    
}


function obtenerNombreCompleto($conexion){

	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];

$sql = "SELECT * from cliente where nombre like '$nombre%' and apellido1 like '$apellido1%';";

$cliente = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($cliente && mysqli_num_rows($cliente) >= 1){
        $resultado = $cliente;
    }
    
    return $resultado;

}


function obtenerProductos($conexion){
    
    $sql = "SELECT idProducto, nombre, descripcion, concat(pvp,' €') as 'pvp', stock FROM producto ORDER BY idProducto ASC;";
    $getProducto = mysqli_query($conexion, $sql);
    
    $resultado = [];
    
    if($getProducto && mysqli_num_rows($getProducto) >= 1){
        $resultado = $getProducto;
    }
    
    return $resultado;
    
}


function resumenPedidos($conexion){
    
    $sql = "SELECT distinct(p.idPedido) AS 'ID pedido', date_format(p.fecha, '%d-%m-%Y') AS 'Fecha de pedido', concat(p.importe,' ','€') AS 'Total pedido', 
	concat(c.nombre,' ', c.apellido1) AS 'Cliente' from pedido p
	join cliente c on c.idCliente=p.idCliente order by p.fecha;";
    $getResumen = mysqli_query($conexion, $sql);

	if($getResumen && mysqli_num_rows($getResumen)>=1){

		return $getResumen;

	}



}
