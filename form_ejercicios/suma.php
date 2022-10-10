<?php

$numVariables = $_POST['variables'];

$suma = 0;

echo "Se han sumado ".$numVariables." números.<br/><hr/>";

for ($j=0; $j<$numVariables; $j++){

    $var = 'var'.$j;
    $suma+=$_POST[$var];

}

echo "Resultado: $suma";

?>