<?php

function crearInputs($numVariables)
{    $numVariables = $_POST['variables'];
    echo "<p>Hay que calcular $numVariables números</p>";
    echo "<form action='#' method='post'>";
    echo "<input type='hidden' name='variables' value='$numVariables'>";

    for ($i = 0; $i < $numVariables; $i++) {
        echo "<input type='number' name='var$i'>";
    }
    echo "<input type='submit' name='sumar' value='sumar'><br>";
    echo "</form>";

}


function sumarVariables($numVariables)
{
    $numVariables = $_POST['variables'];
    $suma = 0;
    echo "Se han sumado " . $numVariables . " números.<br/><hr/>";
    for ($j = 0; $j < $numVariables; $j++) {

        $var = 'var' . $j;
        $suma += $_POST[$var];
    }
    echo "Resultado: $suma";
}

?>