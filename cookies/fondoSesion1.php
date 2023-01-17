<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color fondo I</title>
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

// Si se recibe $_GET['vaciar], la sesión se destruye, ya no queda guardado el último color
if (isset($_GET["vaciar"])) {
    session_destroy();
}

// El color seleccionado se almacena en una variable de sesión. Si existe, se carga ese color; si no, por defecto el color es blanco.
if (isset($_SESSION["color"])) {
    $color = $_SESSION["color"];
} else {
    $color = "white";
}

// Si el usuario selecciona un color, se almacena en la variable de sesión.
if (isset($_GET["color"])) {
    $color = $_GET["color"];
    $_SESSION["color"] = $color;
    echo $_SESSION["color"];
}

echo '<body style="background-color:' . $color . ';">';


?>

<div
    style="height: 24px; width: 105px; border: solid 1px grey; margin-top: 20px; padding:10px; background-color:white; font-size:1.1em">
    <a href="./fondoSesion2.php">Ir a página 2</a>
</div>

</body>

</html>