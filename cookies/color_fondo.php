<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambiar color fondo</title>
</head>

<h4>Elige el color de fondo</h4>

<form action="#" method="get">
    <select name="color">
    <option value="" disabled selected>--</option>
        <option value="yellow">Amarillo</option>
        <option value="purple">Morado</option>
        <option value="pink">Rosa</option>
        <option value="green">Verde</option>
        <option value="cadetblue">Azul</option>
    </select>
    <input type="submit" name="enviar" value="Aceptar">
</form>

<?php

// Le doy un valor por defecto a la variable del color
$color = "white";

// Si hay una cookie con un valor para el color, se cargará éste.
// El color que ha seleccionado el usuario y que se pasa al php por método GET, se almacena en $_COOKIE['color'].
// Si vuelvo a recargar la página, se pierde el valor de la variable GET, por eso, almacenaré también el último color elegido en la variable $_COOKIE['ultimoColor], y le doy una caducidad de 24 horas en milisegundos, desde la fecha y hora en que se recarga por última vez
if (isset($_COOKIE["ultimoColor"])) {
    $color = $_COOKIE["ultimoColor"];
}

if (isset($_GET["color"])) {
    $color = $_GET["color"];
    setcookie("ultimoColor", $color, time() + 86400);
}

echo '<body style="background-color:' . $color . ';">';


?>

</body>

</html>