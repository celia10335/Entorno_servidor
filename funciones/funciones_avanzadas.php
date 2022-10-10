<?php

//Crea una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().

declare(strict_types=1);
function mayor(): int
{
    $argumentos = func_get_args();
    $max = $argumentos[0];

    foreach ($argumentos as $a) {
        if ($a > $max) {
            $max = $a;
        }
    }
    return $max;
}

$mayor_numero = mayor(11, 3, -15, 7, -9);
echo ("El valor máximo es " . $mayor_numero);


// Crea una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ...

function concatenar(...$palabras): string
{
    $cadena = "";
    foreach ($palabras as $p) {
        $cadena .= $p." ";    }
        
        return $cadena;
}

$cadena = concatenar("El", "perro", "de", "San", "Roque", "no", "tiene", "rabo");
echo ("<br>".$cadena);




?>