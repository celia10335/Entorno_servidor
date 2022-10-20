<?php

// Utilizo la variable aux para intercambiar un valor por el otro.
// Recorre el array con un for, tomando cada elemento y comparando con cada uno de los siguientes. Si encuentra uno que es mayor, el valor del menor se almacena en aux, en su lugar almaceno el mayor, y en la posición del mayor almaceno lo que hay en aux.
function ordenaArray($array_num){

    $aux=0;

    for ($i=0; $i<count($array_num); $i++){
        for ($j=0; $j<count($array_num)-1; $j++){
            if ($array_num[$i] > $array_num[$j]){
                $aux = $array_num[$i];
                $array_num[$i] = $array_num[$j];
                $array_num[$j] = $aux;

            }
        }
    }

    return $array_num;

}


// Pruebo la función
$num = [2, 25, 18, 4];

$ordenado = ordenaArray($num);

print_r($ordenado);

?>