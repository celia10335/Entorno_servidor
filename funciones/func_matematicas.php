<?php

declare(strict_types=1);

// digitos(int $num): int → devuelve la cantidad de dígitos de un número.
function digitos(int $num): int
{
$cifras = 0;
do {
    $num = $num/10;
    $cifras++;
} while($num > 1);

    return $cifras;
}

$num = 241857;
$cifras = digitos($num);
echo ("El número ".$num." tiene ".$cifras." cifras<hr>");


// digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
function digitoN(int $num, int $pos): int{
    $digitoBuscado = 0;
    $pos_inversa = digitos($num)-$pos;
    $num = (int)($num/(10**($pos_inversa)));
    $digitoBuscado = (int)($num%10);
    return $digitoBuscado;
}

echo ("Número ".$num."<br>");
echo ("dígito 1: ".digitoN($num, 1)."<br>");
echo ("dígito 2: ".digitoN($num, 2)."<br>");
echo ("dígito 3: ".digitoN($num, 3)."<br>");
echo ("dígito 4: ".digitoN($num, 4)."<br>");
echo ("dígito 5: ".digitoN($num, 5)."<br>");
echo ("dígito 6: ".digitoN($num, 6)."<br>");
echo ("<hr>");


// quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
function quitaPorDetras(int $num, int $cant): int{
    $parteDerecha = (int)($num%(10**($cant)));
    $numTruncado = ($num - $parteDerecha)/10**($cant);
    return $numTruncado;
}

echo ("Al número ".$num." le quito 2 cifras por detrás: ".quitaPorDetras($num, 2)."<br>");
echo ("Al número ".$num." le quito 3 cifras por detrás: ".quitaPorDetras($num, 3)."<br>");
echo ("Al número ".$num." le quito 5 cifras por detrás: ".quitaPorDetras($num, 5)."<br>");
echo ("Al número ".$num." le quito 1 cifras por detrás: ".quitaPorDetras($num, 1)."<br>");
echo ("<hr>");

// quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.
function quitaPorDelante(int $num, int $cant): int{
    $cifrasRestantes = digitos($num) - $cant;
    $parteIzquierda = (int)($num%(10**($cifrasRestantes)));
    return $parteIzquierda;
}

echo ("Al número ".$num." le quito 2 cifras por delante: ".quitaPorDelante($num, 2)."<br>");
echo ("Al número ".$num." le quito 3 cifras por delante: ".quitaPorDelante($num, 3)."<br>");
echo ("Al número ".$num." le quito 5 cifras por delante: ".quitaPorDelante($num, 5)."<br>");
echo ("Al número ".$num." le quito 1 cifras por delante: ".quitaPorDelante($num, 1)."<br>");



?>