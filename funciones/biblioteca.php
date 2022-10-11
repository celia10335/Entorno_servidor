<?php
function suma(...$num){
    if (count($num) == 0){
        return false;
    } else {
        $suma = 0;
        foreach($num as $n){
            $suma+=$n;
        }
        return $suma;
    }
}

function resta(){
    if (func_num_args() == 0){
        return false;
    } else {
        $resta = func_get_arg(0);
        for ($i=1; $i<func_num_args(); $i++){
            $resta -= func_get_arg($i);
        }
        return $resta;
    }
}

function multiplica(...$num){
    if (count($num) == 0){
        return false;
    } else {
        $producto = 1;
        foreach($num as $n){
            $producto *= $n;
        }
        return $producto;
    }
}

function divide($a, $b){
    return (int)($a/$b);
}



?>