<?php

function ordenar ($num){

        $aux = 0;
            for ($i=0; $i<count($num); $i++){

                for ($j=0; $j<count($num)-1; $j++){

                    if ($num[$i] > $num[$j]) {
                    $aux = $num[$i];
                    $num[$i] = $num[$j];
                    $num[$j] = $aux;
                }
                }

                
            }

        return $num;

    
}


$numeros = [4,7,13,2,31];
$numOrden = ordenar($numeros);
var_dump($numOrden);

?>