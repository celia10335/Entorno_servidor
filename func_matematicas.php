<?php

// digitos(int $num): int → devuelve la cantidad de dígitos de un número.
function digitos($num) : int{
$cifras = 0;
do{
    $num%10;
    $cifras++;
}while((int)($num%10) > 0);

    return $cifras;
}


// digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
// quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
// quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.


?>