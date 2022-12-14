<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones sencillas</title>
</head>
<body>

<?php

//Una función que averigüe si un número es par: esPar(int $num): bool
function parImpar(int $num){
    $esPar = false;

    if ($num%2 == 0){
        $esPar = true;
    }

    $mensaje = ($esPar==true) ? ("El número ".$num." es par") : ("El número ".$num." es impar");
    echo $mensaje;
}
echo ("<p><em>Probando función parImpar: </em></p>");
parImpar(19);


// Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array
function arrayAleatorio(int $tam, int $min, int $max){
    $aleatorios = [];

    for ($i=0; $i<$tam; $i++){
        array_push($aleatorios, rand($min, $max));
    }

    return $aleatorios;
}
echo ("<hr>");
echo ("<p><em>Probando función arrayAleatorio: </em></p>");
$numeros = arrayAleatorio(7, -5, 35);
foreach($numeros as $n){
    echo ($n." ");
}


// Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int
function soloPares (&$arrayPares){

    $j = 0;
    foreach($arrayPares as $num){

        if ($num%2 == 0){
            $a_pares[$j] = $num;
            $j++;
        } 
    }

    $arrayPares = $a_pares;
}

echo ("<hr>");
echo ("<p><em>Probando función soloPares: </em></p>");

echo "- partimos de este array<br>";
$prueba = arrayAleatorio(10, 0, 20);
foreach ($prueba as $p){
    echo $p." ";
}

echo "<br>";
echo "<br>- y obtenemos este otro<br>";
soloPares($prueba);
foreach($prueba as $p){
    echo $p." ";
}

?>

    
</body>
</html>