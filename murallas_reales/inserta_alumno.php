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


$sql = "INSERT INTO Alumno (id_grupo, nombre, apellidos, expediente, telefono, email)
VALUES ('$_POST[idgrupo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[expediente]', '$_POST[telefono]', '$_POST[email]')";

echo "<section class='add'>";

if ($conexion->query($sql) === true){
    echo "Nuevo alumno insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}


echo "<div class='form'><a href='./consulta_totalAlumnos.php'>ir a ALUMNOS</a></div>
<div class='form'><a href='./form_add_alumno.php'>Añadir alumno</a></div>
</section>";

$conexion->close();
?>


</body>
</html>