<?php
include_once "./conectar.php";

$sql = "INSERT INTO Grupo (nombre, curso) VALUES ('$_POST[nombre]', '$_POST[curso]')";

echo "<section class='add'>";


if ($conexion->query($sql) === true){
    echo "<p>Nuevo grupo insertado</p>";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}


echo "<div class='form'><a href='./consulta_grupos.php'>ir a GRUPOS</a></div>
<div class='form'><a href='./form_add_grupo.php'>Añadir grupo</a></div>
</section>";

$conexion->close();
?>


</body>
</html>