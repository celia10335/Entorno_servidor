<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
 
    // Validación
    $errores = array();
    
    if(empty($nombre)){
        $errores['nombre'] = 'El nombre de cliente no es válido';
    }

    if(empty($apellido1)){
        $errores['apellido1'] = 'El apellido de cliente no es válido';
    }



    if(count($errores) == 0){
        

 $sql = "SELECT * from cliente where nombre like '$nombre%' and apellido1 like '$apellido1%';";
      
 $consultaCliente = mysqli_query($db, $sql);
 
 if($consultaCliente && mysqli_num_rows($consultaCliente) == 1) {
    $cliente = mysqli_fetch_assoc($consultaCliente);
    $_SESSION['clientePorNombre']=$cliente;

 } else {

	$_SESSION["errores_entrada"] = $errores;
	var_dump($_SESSION);

 }
        

    }
    
    header("Location: buscarClienteNombre.php");
}
