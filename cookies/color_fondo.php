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
        <option value="yellow">Amarillo</option>
        <option value="purple">Morado</option>
        <option value="pink">Rosa</option>
        <option value="green">Verde</option>
        <option value="cadetblue">Azul</option>
    </select>
    <input type="submit" name="enviar" value="Aceptar">
</form>

<?php
$color = "white";

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