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


if (!empty($_GET['actualizar'])){

$id = $_GET["idprofesor"];
$nombre = $_GET["nuevo_nombre"];
$apellidos = $_GET["nuevo_apellidos"];
$telefono = $_GET["nuevo_telefono"];
$email = $_GET["nuevo_email"];


    $sql = "UPDATE Profesor SET nombre='".$_GET['nuevo_nombre']."', apellidos='".$_GET['nuevo_apellidos']."', telefono='".$_GET['nuevo_telefono']."', email='".$_GET['nuevo_email']."' WHERE id_profesor='".$id."'";


    if ($conexion->query($sql) === TRUE){
        echo "Registro actualizado correctamente";
    } else {
        echo "Ha habido un error: ".$conexion->error;
    }
}

else{
    // Devolver tabla
    $id = $_GET["idprofesor"];
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];


    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='idprofesor' value='$id'>";
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
}



$conexion->close();
?>