<?php
include_once "./conectar.php";

$sql = "INSERT INTO Grupo (nombre, curso) VALUES ('$_POST[nombre]', '$_POST[curso]')";

if ($conexion->query($sql) === true){
    echo "Nuevo registro insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}

$conexion->close();
?>