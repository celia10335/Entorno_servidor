<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murallas Reales</title>
    <link rel="stylesheet" href="./estilo.css">
</head>


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

?>