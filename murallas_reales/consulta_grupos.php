<?php
include_once "./conectar.php";

$sql = "SELECT id_grupo, nombre FROM Grupo";

$resultado = $conexion->query($sql);

echo "<h2>Listado de grupos</h2>";
echo "<ul>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id = $row["id_grupo"];
        echo "<li>".$row["nombre"].
        "<div class='verDetalle' style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'><a href='consulta_detalleGrupo.php?idgrupo=".$id."'>Alumnos</a></div>

        <div class='borrar' style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'><a href='elimina_grupo.php?idgrupo=".$id."'>Eliminar GRUPO</a></div>
        </li>";
    }
}   


echo "</ul>";


$conexion->close();
?>