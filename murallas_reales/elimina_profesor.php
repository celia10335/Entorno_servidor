<?php

include_once "./conectar.php";

$id = $_GET["idprofesor"];

$sql = "DELETE FROM Profesor WHERE id_profesor=".$id;

echo "<section class='add'>";

if ($conexion->query($sql) === TRUE){
    echo "Profesor eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


echo "<div class='form'><a href='./consulta_profesores.php'>ir a PROFESORES</a></div>
</section>";


$conexion->close();
?>