<?php
include_once "./conectar.php";

$sql = "SELECT Alumno.nombre, apellidos, Grupo.nombre as 'nom_grupo' FROM Alumno JOIN Grupo WHERE Alumno.id_grupo = Grupo.id_grupo";

$resultado = $conexion->query($sql);

echo "<h2>Listado de alumnos</h2>";
echo "<ul>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {

        echo "<li>".$row["nombre"]." ".$row["apellidos"]." - grupo: ".$row["nom_grupo"].
        "</li>";
    }
}   


echo "</ul>";


$conexion->close();
?>