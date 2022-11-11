<?php
include_once "./conectar.php";

$sql = "SELECT Alumno.nombre, apellidos, Grupo.nombre as 'nom_grupo' FROM Alumno JOIN Grupo WHERE Alumno.id_grupo = Grupo.id_grupo";

$resultado = $conexion->query($sql);

echo "<h2>Listado de alumnos</h2>";
echo "<ul>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id_alumno=$row['id_alumno'];
        echo "<li>".$row["nombre"]." ".$row["apellidos"]." - grupo: ".$row["nom_grupo"].
        "<div class='borrar' style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'><a href='elimina_alumno.php?idalumno=".$id_alumno."'>Eliminar</a></div>
        </li>";
    }
}   


echo "</ul>";


$conexion->close();
?>