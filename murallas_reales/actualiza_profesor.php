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



// Devolver tabla
$id = $_GET["idprofesor"];
$nombre = $_GET["nombre"];
$id = $_GET["apellidos"];
$nombre = $_GET["telefono"];
$nombre = $_GET["email"];

echo "<form action='#' method='get'>";
echo "<table>";

echo "<tr><td>Nombre</td><td>Apellidos</td><td>Teléfono</td><td>E-mail</td></tr>";

echo "<tr>
        <td><input type='texto' name='nuevo_nombre' value='".$nombre."'></td>
        <td><input type='texto' name='nuevo_apellidos' value='".$apellidos."'></td>
        <td><input type='texto' name='nuevo_telefono' value='".$telefono."'></td>
        <td><input type='texto' name='nuevo_email' value='".$email."'></td>
    </tr>";

echo "</table>";
echo "<input type='submit' name='actualizar' value='Actualizar datos'><br>";
echo "</form>";


if (!empty($_GET['actualizar'])){

    $sql = "UPDATE Profesor SET nombre=".$_GET['nuevo_nombre'].", apellidos='nuevo_apellidos', telefono='nuevo_telefono', email='nuevo_email' WHERE id_profesor=".$id;


    if ($conexion->query($sql) === TRUE){
        echo "Registro actualizado correctamente";
    } else {
        echo "Ha habido un error: ".$conexion->error;
    }
}


$conexion->close();
?>