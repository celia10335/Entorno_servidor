<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar listado</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>

<?php
include_once "./conectar.php";


$sql = "SELECT id_grupo, nombre FROM Grupo";

$resultado = $conexion->query($sql);


?>

    <p>Selecciona listado a consultar</p>
    <form action="inserta_alumno.php" method="POST">

    <div class="boton">GRUPOS</div>
    <div class="espacio"></div>
    <div class="boton">ALUMNOS</div>
    <div class="espacio"></div>
    <div class="boton">PROFESORES</div>

    </form>

    <?php


    $conexion->close();
    ?>

</body>

</html>