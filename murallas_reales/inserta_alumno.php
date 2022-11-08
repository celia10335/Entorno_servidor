<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "murallas_reales";


// Conectar
$conexion = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: ".$conexion->connect_error);
}


$sql = "INSERT INTO Alumno (id_grupo, nombre, apellidos, expediente, telefono, email)
VALUES ('$_POST[idgrupo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[expediente]', '$_POST[telefono]', '$_POST[email]')";

if ($conexion->query($sql) === true){
    echo "Nuevo registro insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}

$conexion->close();
?>