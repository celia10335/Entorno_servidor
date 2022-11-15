<?php
include_once "./conectar.php";

$sql = "SELECT id_grupo, nombre FROM Grupo order by nombre";

$resultado = $conexion->query($sql);

echo "<h2>Listado de grupos</h2>";

echo "<section>";

echo "<table>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $id = $row["id_grupo"];
        echo "<tr>";
        echo "<td>".$row["nombre"]."</td>
        <td><a href='consulta_detalleGrupo.php?idgrupo=".$id."'>Ver detalle</a></td>
        <td><a href='elimina_grupo.php?idgrupo=".$id."'>Eliminar GRUPO</a></td>";
        echo "</tr>";
    }
}   

echo "</table>";

echo "</section>";

?>
<section class="add">
  <div class="add"><a href="./form_add_grupo.php">Añadir grupo</a>  
</section>


<hr>

<nav>
    <div><a href="./index.php">ir a INICIO</a></div>
    <div><a href="./consulta_totalAlumnos.php">ir a ALUMNOS</a></div>
    <div><a href="./consulta_profesores.php">ir a PROFESORES</a></div>
</nav>



<?php


$conexion->close();
?>