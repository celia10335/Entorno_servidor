<?php
include_once "./conectar.php";

$sql = "SELECT id_profesor, nombre, apellidos FROM Profesor";

$resultado = $conexion->query($sql);

echo "<h2>Listado de profesores</h2>";
echo "<ul>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<li>".$row["nombre"]." ".$row["apellidos"].
        "<div class='boton' style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'><a href='elimina_profesor.php?idprofesor=".$row["id_profesor"]."'>Eliminar</a></div>
        <div class='boton' style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'><a href='actualiza_profesor.php?idprofesor=".$row["id_profesor"]."&nombre=".$row["nombre"]."&apellidos=".$row["apellidos"]."&telefono=".$row["telefono"]."&email=".$row["email"]."'>Modificar</a></div>
        </li>";
    }
}   


echo "</ul>";


$conexion->close();
?>