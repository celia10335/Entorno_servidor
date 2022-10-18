<?php
// Crea una función que que dado un array devuelva otro con los valores invertidos
function invertir ($arrayNum){
    $inverso = [];
    $longArray = count($arrayNum);
    for ($i=0; $i<count($arrayNum); $i++){
        $inverso[$i] = $arrayNum[$longArray-$i-1];
    }
    return $inverso;
}


// Pruebas
$prueba = [15, 91, 17, 9, 3];
$pruebaInversa = invertir($prueba);

echo ('<p>Array original</p>');
foreach($prueba as $n){
    echo ($n.' - ');
}

echo ('<p>Array invertido</p>');
foreach($pruebaInversa as $n){
    echo ($n.' - ');
}

?>