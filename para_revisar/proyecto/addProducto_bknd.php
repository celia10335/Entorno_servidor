<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $idProducto = $_POST['idProducto'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $pvp = $_POST['pvp'];
    $stock= $_POST['stock'];
    
    // Validación
    $errores = array();
    
    if(empty($idProducto) || !is_numeric($idProducto)){
        $errores['idProducto'] = 'El id de producto no es válido';
    }

    if(empty($nombre)){
        $errores['nombre'] = 'El nombre no es válido';
    }

    if(empty($descripcion)){
        $errores['descripcion'] = 'La descripción no puede estar vacía';
    }

    if(empty($pvp) || !is_numeric($pvp)){
        $errores['pvp'] = 'El valor introducido no es válido';
    }

    if(empty($stock) || !is_numeric($stock)){
        $errores['stock'] = 'El valor introducido no es válido';
    }
    
    

    
    if(count($errores) == 0){
           
            $sql = "INSERT INTO `producto`(`idProducto`, `nombre`, `descripcion`, `pvp`, `stock`) VALUES
            ('$idProducto', '$nombre', '$descripcion','$pvp', '$stock');";
      
        $guardar = mysqli_query($db, $sql);
        
        //var_dump($guardar);
        

    }else{
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        
    }
    
    header("Location: addProducto_bknd.php");
}
