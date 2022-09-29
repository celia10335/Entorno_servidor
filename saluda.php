<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$nombre = $_GET['nombre'];
$apellido1 = $_GET['apellido1'];
?>

<form action="saluda.php" method="get">
    <p><label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre"></p>

    
    <p><label for="apellido1">Primer apellido: </label>
	<input type="text" name="apellido1" id="apellido1"></p>


	<input type="submit" value="Enviar">
</form>


<?php 

//Establecer valor vacío si no se ha introducido información
if (!isset($nombre)){
    $nombre = " ";
}

if (!isset($apellido1)){
    $apellido1 = " ";
}


//Comprobar si se han recibido los datos

echo "Nombre: ".$nombre;

echo "Primer apellido: ".$apellido1;

?>

</body>
</html>