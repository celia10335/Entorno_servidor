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


$id = $_GET["idprofesor"];

$sql = "DELETE FROM Profesor WHERE id_profesor=".$id;


if ($conexion->query($sql) === TRUE){
    echo "Registro eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


$conexion->close();
?>