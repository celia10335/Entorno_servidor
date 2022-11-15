<?php
include_once "./conectar.php";

$sql = "INSERT INTO Profesor (nombre, apellidos, telefono, email)
VALUES ('$_POST[nombre]', '$_POST[apellidos]', '$_POST[telefono]', '$_POST[email]')";

echo "<section class='add'>";

if ($conexion->query($sql) === true){
    echo "Nuevo profesor insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}


echo "<div class='form'><a href='./consulta_profesores.php'>ir a PROFESORES</a></div>
<div class='form'><a href='./form_add_profesor.php'>Añadir profesor</a></div>
</section>";

$conexion->close();
?>


</body>
</html>