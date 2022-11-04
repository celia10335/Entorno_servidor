<?php
include_once "./conectar.php";

$sql = "INSERT INTO Alumno (nombre, apellidos, expediente, telefono, email)
VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[expediente]', '$_POST[telefono]', '$_POST[email]')";

if ($conexion->query($sql) === true){
    echo "Nuevo registro insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}

$conexion->close();
?>