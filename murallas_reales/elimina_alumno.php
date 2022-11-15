<?php

include_once "./conectar.php";


$id = $_GET["idalumno"];

$sql = "DELETE FROM Alumno WHERE id_alumno=".$id;

echo "<section class='add'>";

if ($conexion->query($sql) === TRUE){
    echo "Alumno eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


echo "<div class='form'><a href='./consulta_totalAlumnos.php'>ir a ALUMNOS</a></div>
</section>";

$conexion->close();
?>