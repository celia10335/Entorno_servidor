<?php
include_once "./conectar.php";

$sql = "SELECT id_profesor, nombre, apellidos, telefono, email FROM Profesor order by apellidos";

$resultado = $conexion->query($sql);

echo "<h2>Listado de profesores</h2>";

echo "<section>";

echo "<table>";
echo "<tr><th>PROFESOR</th><th>Teléfono</th><th>E-mail</th></tr>";


if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nombre"]." ".$row["apellidos"]."</td>
        <td>".$row["telefono"]."</td>
        <td>".$row["email"]."</td>
        <td><a href='actualiza_profesor.php?idprofesor=".$row["id_profesor"]."&nombre=".$row["nombre"]."&apellidos=".$row["apellidos"]."&telefono=".$row["telefono"]."&email=".$row["email"]."'>Modificar</a></td>
        <td><a href='elimina_profesor.php?idprofesor=".$row["id_profesor"]."'>Eliminar</a></td>
        </td>";
        echo "</tr>";
    }
}   

echo "</table>";

echo "</section>";

?>

<section class="add">
  <div class="add"><a href="./form_add_profesor.php">Añadir profesor</a>  
</section>


<hr>

<nav>
    <div><a href="./index.php">ir a INICIO</a></div>
    <div><a href="./consulta_grupos.php">ir a GRUPOS</a></div>
    <div><a href="./consulta_totalAlumnos.php">ir a ALUMNOS</a></div>
</nav>



<?php

$conexion->close();


// style='border: solid black 2px; display: inline-flex; padding: 3px; margin: 8px;'
?>



