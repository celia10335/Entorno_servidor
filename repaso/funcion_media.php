<?php

function media ($num){
    
        $suma = 0;
        foreach ($num as $n){
            $suma += $n;
        }
        return $suma/count($num);
    
}

$arrayNum = [];
$arrayNum[0] = 2;
$arrayNum[1] = 6;
$arrayNum[2] = 12;
$arrayNum[3] = 0;

$resultado = media($arrayNum);
echo ($resultado);
?>