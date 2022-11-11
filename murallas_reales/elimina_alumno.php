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


$id = $_GET["idalumno"];

$sql = "DELETE FROM Alumno WHERE id_alumno=".$id;


if ($conexion->query($sql) === TRUE){
    echo "Registro eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


$conexion->close();
?>