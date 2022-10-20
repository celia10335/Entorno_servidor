<?php
// Para comprobar que el array es capicúa, voy a ir comparando el primer elemento con el último. Para ello utilizo un sólo índice, el i, pero tomando los elementos de manera que se vaya reduciendo el índice del segundo en función del avance del primero.
// Así, si el array tiene 6 elementos, comparo el 0 con el 5; después el 0 avanza al 1, pero el 5 debe reducirse al 4, para ello es suficiente con sumar 1 al 0 y restar 1 al 5. Siguiente vuelta: sumo 1 al 1 (= 2) y resto 2 al 5.
//Así hasta llegar a la mitad del intervalo en número entero. Si el número de elementos fuera impar, el del centro no hace falta comprobarlo; por eso, con llegar a la mitad en entero, sería suficiente. Por ejemplo, 7/2 = 3,5 pero en entero es 3. El elemento central sería el 4.
// Con la variable $esIgual, contabilizo las comparaciones que dan verdadero. La función hará tantas comparaciones como la mitad de elementos en número entero. Si todas son ciertas, la función devuelve true.
function arrayCapicua ($arrayNum){
$mitad = (int)(count($arrayNum)/2);
$esIgual = 0;
for ($i=0; $i<$mitad; $i++){

    if ($arrayNum[$i] == $arrayNum[count($arrayNum)-1-$i]){
        $esIgual ++;
    }
}

if ($esIgual == $mitad){
    return true;
} else {
    return false;
}
}


// Pruebo la función con los posibles casos que puedo tener
echo ("Ejemplo de array par no capicúa");
$testeo = [1, 55, 8, 8, 5, 1];
$resultado = arrayCapicua($testeo);
print_r($testeo);
if ($resultado == false){
    echo ("<h3>El array NO es capicúa</h3>");
} else {
    echo ("<h3>El array SÍ es capicúa</h3>");
}

echo ("Ejemplo de array par capicúa");
$testeo = [1, 55, 8, 8, 55, 1];
$resultado = arrayCapicua($testeo);
print_r($testeo);
if ($resultado == false){
    echo ("<h3>El array NO es capicúa</h3>");
} else {
    echo ("<h3>El array SÍ es capicúa</h3>");
}

echo ("Ejemplo de array impar no capicúa");
$testeo = [1, 29, 8, 14, 8, 0, 0];
$resultado = arrayCapicua($testeo);
print_r($testeo);
if ($resultado == false){
    echo ("<h3>El array NO es capicúa</h3>");
} else {
    echo ("<h3>El array SÍ es capicúa</h3>");
}


echo ("Ejemplo de array impar capicúa");
$testeo = [1, 29, 8, 14, 8, 29, 1];
$resultado = arrayCapicua($testeo);
print_r($testeo);
if ($resultado == false){
    echo ("<h3>El array NO es capicúa</h3>");
} else {
    echo ("<h3>El array SÍ es capicúa</h3>");
}

?>