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
include_once "./conectar.php";

$idgrupo = $_GET['idgrupo'];

$sqlProf = "SELECT nombre, apellidos FROM Profesor JOIN Tutoria WHERE Profesor.id_profesor=Tutoria.id_profesor AND id_grupo =$idgrupo";

$resultadoProf = $conexion->query($sqlProf);

echo "<h2>Profesores y alumnos del grupo ".$idgrupo."</h2>";

echo "<section>";

echo "<table class='igual_igual'>";

echo "<tr><th>PROFESORES</th><th>ALUMNOS</th></tr>";


if ($resultadoProf->num_rows > 0) {
    while ($row = $resultadoProf->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nombre"]." ".$row["apellidos"].
        "</td>";
    }
}   


$sql = "SELECT * FROM Alumno WHERE id_grupo =$idgrupo";

$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<td>".$row["nombre"]." ".$row["apellidos"].
        "</td>";
        echo "</tr>";
    }
}   

echo "</table>";

echo "</section>";

?>

<hr>

<nav>
    <div><a href="./index.php">ir a INICIO</a></div>
    <div><a href="./consulta_grupos.php">ir a GRUPOS</a></div>
    <div><a href="./consulta_profesores.php">ir a PROFESORES</a></div>
</nav>



<?php

$conexion->close();
?>