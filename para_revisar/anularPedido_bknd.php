<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    var_dump($_POST);
    
    $idPedido = $_POST['idPedido'];
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $tlf= $_POST['tlf'];
    $email= $_POST['e_mail'];
    
    // Validación
    $errores = array();
    
    if(empty($idcliente) || !is_numeric($idcliente)){
        $errores['idCliente'] = 'El id de cliente no es válido';
    }

    if(is_numeric($nombre)){
        $errores['nombre'] = 'El nombre no es válido';
    }

    if(is_numeric($apellido1)){
        $errores['apellido1'] = 'El apellido no es válido';
    }

    if(is_numeric($apellido2)){
        $errores['apellido2'] = 'El apellido no es válido';
    }

    if(!is_numeric($tlf)){
        $errores['tlf'] = 'El número móvil introducido no es válido';
    }
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores['e_mail'] = 'El correo electrónico no es válido';
    }



    if(count($errores) == 0){
           
            $sql = "UPDATE cliente SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', tlf='$tlf', email='$email' 
            WHERE idCliente='$idcliente';";

      
        $guardar = mysqli_query($db, $sql);

        
        
        //var_dump($guardar);
        

    }else{
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        
    }
    
    header("Location: index.php");
}
