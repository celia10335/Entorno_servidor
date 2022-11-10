<?php
include_once "./conectar.php";

$idgrupo = 9;

$sql = "SELECT * FROM Alumno WHERE id_grupo =".$idgrupo;

$resultado = $conexion->query($sql);

echo "<h2>Listado de alumnos del grupo ".$idgrupo."</h2>";
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