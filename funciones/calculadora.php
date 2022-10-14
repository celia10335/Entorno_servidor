<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

include_once "biblioteca.php";

$num1 = $_GET["numero1"];
$num2 = $_GET["numero2"];
$opcion = $_GET["operar"];



if (isset($_GET["operar"])) {

    switch ($opcion) {
        case "suma":
            $resultado = suma($num1, $num2);
            break;
        case "resta":
            $resultado = resta($num1, $num2);
            break;
        case "multi":
            $resultado = multiplica($num1, $num2);
            break;
        case "div":
            $resultado = divide($num1, $num2);
            break;
        default:
            break;
    }

    echo ("<h3>El resultado de la operación es " . $resultado . "</h3>");

    // Otra forma más elegante (siempre que el "value" de cada opción coincida con el nombre de las funciones):
        // echo ("<h3>El resultado de la operación es " . $_GET['operar']($_GET['num1'],$_GET['num2']) . "</h3>");



}
else if

(isset($_GET["numero1"]) && isset($_GET["numero2"])) {

    echo ("<p>Elige tipo de operación</p>");

    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='numero1' value='$num1'>";
    echo "<input type='hidden' name='numero2' value='$num2'>";

    echo "<input type='radio' name='operar' value='suma'>";
    echo "<label for='suma'>SUMA</label><br>";
    echo "<input type='radio' name='operar' value='resta'>";
    echo "<label for='resta'>RESTA</label><br>";
    echo "<input type='radio' name='operar' value='multi'>";
    echo "<label for='multiplicacion'>MULTIPLICACIÓN</label><br>";
    echo "<input type='radio' name='operar' value='div'>";
    echo "<label for='division'>DIVISIÓN</label><br>";

    echo "<input type='submit' value='Calcular'>";

}
else {

?>


    <form action="#" method="get">
        <p><label for="numero1">Primer operando</label>
            <input type="number" name="numero1">
        <p><label for="numero2">Segundo operando</label>
            <input type="number" name="numero2">
        </p>
        <input type="submit" value="Enviar">
    </form>


    <?php


}

?>


</body>

</html>