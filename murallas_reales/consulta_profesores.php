<?php
include_once "./conectar.php";

$sql = "SELECT nombre, apellidos FROM Profesor";

$resultado = $conexion->query($sql);

echo "<h2>Listado de profesores</h2>";
echo "<ul>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<li>".$row["nombre"]." ".$row["apellidos"].
        "</li>";
    }
}   


echo "</ul>";


$conexion->close();
?>