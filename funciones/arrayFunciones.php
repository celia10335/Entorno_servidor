<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$op1 = $_GET["operando1"];
$op2 = $_GET["operando2"];


if (isset($_GET["operando1"]) && isset($_GET["operando2"])){

    echo ("<p>Elige tipo de operación</p>");


    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='operando1' value='$op1'>";
    echo "<input type='hidden' name='operando2' value='$op2'>";

    
    echo "<input type='radio' name='suma' value='suma'>";
    echo "<label for='suma'>SUMA</label><br>";
    echo "<input type='radio' name='resta' value='resta'>";
    echo "<label for='resta'>RESTA</label><br>";
    echo "<input type='radio' name='multiplicacion' value='multiplicación'>";
    echo "<label for='multiplicacion'>MULTIPLICACIÓN</label><br>";
    echo "<input type='radio' name='division' value='división'>";
    echo "<label for='division'>DIVISIÓN</label><br>";

    
    echo "<input type='submit' value='Calcular'>";



} else {
    


?>




<form action="#" method="get">
            <p><label for="operando1">Primer operando</label>
                <input type="number" name="operando1">
                <p><label for="operando2">Segundo operando</label>
                <input type="number" name="operando2">
            </p>
            <input type="submit" value="Enviar">
        </form>


<?php


}

?>

    
</body>
</html>