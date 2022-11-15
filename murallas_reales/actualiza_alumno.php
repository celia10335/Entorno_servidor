<?php

include_once "./conectar.php";


if (!empty($_GET['actualizar'])){

$id = $_GET["idalumno"];
$nombre = $_GET["nuevo_nombre"];
$apellidos = $_GET["nuevo_apellidos"];
$expediente = $_GET['nuevo_expediente'];
$telefono = $_GET["nuevo_telefono"];
$email = $_GET["nuevo_email"];


    $sql = "UPDATE Alumno SET nombre='".$nombre."', apellidos='".$apellidos."',email='".$expediente."', telefono='".$telefono."', email='".$email."' WHERE id_alumno='".$id."'";

    echo "<section class='add'>";

    if ($conexion->query($sql) === TRUE){
        echo "Alumno actualizado correctamente";
    } else {
        echo "Ha habido un error: ".$conexion->error;
    }

echo "<div class='form'><a href='./consulta_totalAlumnos.php'>ir a ALUMNOS</a></div>
</section>";
}

else{
    // Devolver tabla
    $id = $_GET["idalumno"];
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $expediente = $_GET["expediente"];
    $telefono = $_GET["telefono"];
    $email = $_GET["email"];


    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='idalumno' value='$id'>";
    echo "<table>";

    echo "<tr><td>Nombre</td><td>Apellidos</td><td>Expediente</td><td>Teléfono</td><td>E-mail</td></tr>";

    echo "<tr>
        <td><input type='texto' name='nuevo_nombre' value='".$nombre."'></td>
        <td><input type='texto' name='nuevo_apellidos' value='".$apellidos."'></td>
        <td><input type='texto' name='nuevo_expediente' value='".$expediente."'></td>
        <td><input type='texto' name='nuevo_telefono' value='".$telefono."'></td>
        <td><input type='texto' name='nuevo_email' value='".$email."'></td>
    </tr>";

    echo "</table>";
    echo "<input type='submit' name='actualizar' value='Actualizar datos'><br>";
    echo "</form>";
}



$conexion->close();
?>