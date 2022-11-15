<?php
include_once "./conectar.php";

$idgrupo = $_GET['idgrupo'];

// Tabla Profesores
$sqlProf = "SELECT nombre, apellidos FROM Profesor JOIN Tutoria WHERE Profesor.id_profesor=Tutoria.id_profesor AND id_grupo =$idgrupo order by apellidos";
$resultadoProf = $conexion->query($sqlProf);

echo "<h2>Profesores y alumnos del grupo ".$idgrupo."</h2>";
echo "<section style='display: block'>";
echo "<table class='detalle'>";
echo "<tr><th>PROFESORES</th></tr>";

if ($resultadoProf->num_rows > 0) {
    while ($row = $resultadoProf->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nombre"]." ".$row["apellidos"].
        "</td>";
    }
} 
echo "</table>";

echo "<div class='espacio'></div>";

// Tabla Alumnos
$sql = "SELECT nombre, apellidos FROM Alumno WHERE id_grupo =$idgrupo order by apellidos";
$resultado = $conexion->query($sql);

echo "<table class='detalle'>";
echo "<tr><th>ALUMNOS</th></tr>";

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
    <div><a href="./consulta_totalAlumnos.php">ir a ALUMNOS</a></div>
    <div><a href="./consulta_grupos.php">ir a GRUPOS</a></div>
    <div><a href="./consulta_profesores.php">ir a PROFESORES</a></div>
</nav>



<?php

$conexion->close();
?>