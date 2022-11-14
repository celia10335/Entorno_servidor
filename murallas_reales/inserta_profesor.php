<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar listado</title>
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


$sql = "INSERT INTO Profesor (nombre, apellidos, telefono, email)
VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[telefono]', '$_POST[email]')";

echo "<section class='add'>";

if ($conexion->query($sql) === true){
    echo "Nuevo profesor insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}


echo "<div class='form'><a href='./consulta_profesores.php'>ir a PROFESORES</a></div>
<div class='form'><a href='./form_add_profesor.php'>Añadir profesor</a></div>
</section>";

$conexion->close();
?>


</body>
</html>