<?php
include_once "./conectar.php";

$id = $_GET["idgrupo"];

$sql = "DELETE FROM Grupo WHERE id_grupo=".$id;


if ($conexion->query($sql) === TRUE){
    echo "Registro eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


$conexion->close();
?>