<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $idcliente = $_POST['idCliente'];
   
    // Validación
    $errores = array();
    
    
    if(empty($idcliente) || !is_numeric($idcliente)){
        $errores['idCliente'] = 'El id de cliente no es válido';
        
    }

    
    if(count($errores) == 0){
           
            $sql = "DELETE FROM cliente WHERE (idCliente='$idcliente');";
      
        $eliminar = mysqli_query($db, $sql);
        
        //var_dump($eliminar);
        
        
    }else{
        
        $_SESSION["errores_entrada"] = $errores;
        //var_dump($_SESSION);
        
    }
    
   header("Location: index.php");
    
}
