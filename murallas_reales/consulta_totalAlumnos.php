<?php
include_once "./conectar.php";

$sql = "SELECT Alumno.id_alumno as 'id_alumno', Alumno.nombre, apellidos, expediente, telefono, email, Grupo.nombre as 'nom_grupo', Grupo.id_grupo as 'id_grupo' FROM Alumno JOIN Grupo WHERE Alumno.id_grupo = Grupo.id_grupo order by nom_grupo, apellidos";

$resultado = $conexion->query($sql);



echo "<h2>Listado de alumnos</h2>";

echo "<section>";

echo "<table>";
echo "<tr><th>ALUMNO</th><th>Expediente</th><th>Grupo</th><th>Teléfono</th><th>E-mail</th></tr>";

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nombre"]." ".$row["apellidos"]."</td>
        <td>".$row["expediente"]."</td>
        <td>".$row["nom_grupo"]."</td>
        <td>".$row["telefono"]."</td>
        <td>".$row["email"]."</td>
        <td><a href='actualiza_alumno.php?idalumno=".$row['id_alumno']."&nombre=".$row["nombre"]."&apellidos=".$row["apellidos"]."&expediente=".$row["expediente"]."&telefono=".$row["telefono"]."&email=".$row["email"]."&nom_grupo=".$row["nom_grupo"]."'>Modificar</a></td>
        <td><a href='elimina_alumno.php?idalumno=".$row['id_alumno']."'>Eliminar</a></td>";
        echo "</tr>";
    }
}   

echo "</table>";

echo "</section>";

?>
<section class="add">
  <div class="add"><a href="./form_add_alumno.php">Añadir alumno</a>  
</section>


<hr>

<nav>
    <div><a href="./index.php">ir a INICIO</a></div>
    <div><a href="./consulta_grupos.php">ir a GRUPOS</a></div>
    <div><a href="./consulta_profesores.php">ir a PROFESORES</a></div>
</nav>



<?php


$conexion->close();
?>