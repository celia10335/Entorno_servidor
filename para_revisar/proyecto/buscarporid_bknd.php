<?php

if(isset($_POST)){
    
    require_once 'includes/conexion.php';
    
    //var_dump($_POST);
    
    $idcliente = $_POST['idCliente'];
 
    echo 'idCliente'.$idcliente;
    // Validación
    $errores = array();
    
    if(empty($idcliente) || !is_numeric($idcliente)){
        $errores['idCliente'] = 'El id de cliente no es válido';
    }



    if(count($errores) == 0){

      //  echo 'Voy a hacer una cosulta';
           
            $sql = "SELECT idCliente, nombre, apellido1, apellido2, tlf, email FROM cliente
            WHERE idCliente=$idcliente;";
      
        $guardar = mysqli_query($db, $sql);
        
        if($guardar && mysqli_num_rows($guardar) == 1){
            $cliente = mysqli_fetch_assoc($guardar);
            $_SESSION["clienteAModificar"]=$cliente;
        }
       
        

    }else{
        echo 'Hubo errores, no he consultado';
        
        $_SESSION["errores_entrada"] = $errores;
        var_dump($_SESSION);
        
    }
    
    header("Location: modificarcliente.php");
}
