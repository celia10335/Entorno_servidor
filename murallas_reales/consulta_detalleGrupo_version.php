<?php
include_once "./conectar.php";

$idgrupo = $_GET['idgrupo'];

$sqlProf = "SELECT nombre, apellidos FROM Profesor JOIN Tutoria WHERE Profesor.id_profesor=Tutoria.id_profesor AND id_grupo =$idgrupo";
$resultadoProf = $conexion->query($sqlProf);

$sql = "SELECT Alumno.nombre, Alumno.apellidos, Grupo.nombre as 'nom_grupo' FROM Alumno JOIN Grupo WHERE Alumno.id_grupo = Grupo.id_grupo AND Grupo.id_grupo =$idgrupo";
$resultadoAlum = $conexion->query($sql);

echo "<h2>Profesores y alumnos del grupo ".$row['nom_grupo']."</h2>";

if (($resultadoProf->num_rows > 0) || ($resultadoAlum->num_rows > 0)) {

    while ($row = $resultadoProf->fetch_assoc() || $row = $resultadoAlum->fetch_assoc()) {
        echo "<p>Nombre profesor: ".$row['nombre']."</p>";
        echo "<p>Apellidos profesor: ".$row['apellidos']."</p>";
        echo "<p>Nombre alumno: ".$row['Alumno.nombre']."</p>";
        echo "<p>Apellidos alumno: ".$row['Alumno.apellidos']."</p>";
        echo "<p>Grupo: ".$row['nom_grupo']."</p>";

    }
}


echo "<section>";
echo "<table class='igual_igual'>";
echo "<tr><th>PROFESORES</th><th>ALUMNOS</th></tr>";


 // Si existe profesor
if ($resultadoProf->num_rows > 0) {

    while ($row = $resultadoProf->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nombre"]." ".$row["apellidos"].
        "</td>";

        if ($resultadoAlum->num_rows > 0) {
            while ($row = $resultadoAlum->fetch_assoc()) {
                echo "<td>".$row["Alumno.nombre"]." ".$row["Alumno.apellidos"].
                "</td>";
                echo "</tr>";
            }

        } else {
            echo "<td></td>";
            echo "</tr>";
        }
    } //Fin de while

// Si no existe profesor, pero sí alumnos
} else if ($resultadoAlum->num_rows > 0){
    echo "<tr>";
    echo "<td></td>";

    while ($row = $resultadoAlum->fetch_assoc()) {
        echo "<td>".$row["Alumno.nombre"]." ".$row["Alumno.apellidos"].
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