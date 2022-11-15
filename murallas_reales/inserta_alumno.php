<?php
include_once "./conectar.php";

$sql = "INSERT INTO Alumno (id_grupo, nombre, apellidos, expediente, telefono, email)
VALUES ('$_POST[idgrupo]', '$_POST[nombre]', '$_POST[apellidos]', '$_POST[expediente]', '$_POST[telefono]', '$_POST[email]')";

echo "<section class='add'>";

if ($conexion->query($sql) === true){
    echo "Nuevo alumno insertado";
} else {
    echo "Error: ".$sql."<br>".$conexion->connect_error;
}


echo "<div class='form'><a href='./consulta_totalAlumnos.php'>ir a ALUMNOS</a></div>
<div class='form'><a href='./form_add_alumno.php'>Añadir alumno</a></div>
</section>";

$conexion->close();
?>


</body>
</html>