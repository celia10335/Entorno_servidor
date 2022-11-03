<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$tlf = $_POST['tlf'];
    
echo ("<p>".$nombre."<br>".$apellidos."<br>".$direccion."<br>".$tlf."</p>");

?>
</body>
</html>