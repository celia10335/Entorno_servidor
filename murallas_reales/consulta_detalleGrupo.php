<?php
include_once "./conectar.php";

$idgrupo = $_GET['idgrupo'];

//SELECT Alumno.nombre, apellidos, Grupo.nombre as 'nom_grupo' FROM Alumno JOIN Grupo WHERE Alumno.id_grupo = Grupo.id_grupo

$sqlProf = "SELECT nombre, apellidos FROM Profesor JOIN Tutoria WHERE Profesor.id_profesor=Tutoria.id_profesor AND id_grupo =$idgrupo";

$resultadoProf = $conexion->query($sqlProf);

echo "<h2>Profesores tutores del grupo ".$idgrupo."</h2>";
echo "<ul>";

if ($resultadoProf->num_rows > 0) {
    while ($row = $resultadoProf->fetch_assoc()) {

        echo "<li>".$row["nombre"]." ".$row["apellidos"].
        "</li>";
    }
}   


echo "</ul>";



$sql = "SELECT * FROM Alumno WHERE id_grupo =$idgrupo";

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