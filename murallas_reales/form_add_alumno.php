<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar alumno</title>
</head>

<body>

<?php
include_once "./conectar.php";


$sql = "SELECT id_grupo, nombre FROM Grupo";

$resultado = $conexion->query($sql);


?>

    <p>Introduzca los datos del alumno</p>
    <form action="inserta_alumno.php" method="POST">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </p>
        <p>
            <label for="idgrupo">Grupo</label>
            <select name="idgrupo">

            <?php
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["id_grupo"];
                    $nombre = $row["nombre"];
                    echo "<option value='$id'>$nombre</option>";
                }
            }           
            ?>

            </select>
        </p>
        <p>
            <label for="expediente">Expediente</label>
            <input type="number" name="expediente">
        </p>
        <p>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email">
        </p>
        <p>
            <input type="submit" value="Insertar">
        </p>

    </form>

    <?php


    $conexion->close();
    ?>

</body>

</html>