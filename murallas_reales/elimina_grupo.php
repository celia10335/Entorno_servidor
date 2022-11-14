<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar listado</title>
    <link rel="stylesheet" href="./estilo.css">
</head>



<?php
include_once "./conectar.php";

$id = $_GET["idgrupo"];

$sql = "DELETE FROM Grupo WHERE id_grupo=".$id;

echo "<section class='add'>";

if ($conexion->query($sql) === TRUE){
    echo "Grupo eliminado correctamente";
} else {
    echo "Ha habido un error: ".$conexion->error;
}


echo "<div class='form'><a href='./consulta_grupos.php'>ir a GRUPOS</a></div>
</section>";


$conexion->close();
?>