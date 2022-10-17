<?php

function ordenar (...$num){
    if (func_num_args() == 0) {
        return false;
    }
    else{
        $enOrden = [];

        $mayor = func_get_arg(0);

        $j = 0;

        for ($j=0; $j<func_num_args(); $j++){

            

            for ($i=1; $i<func_num_args(); $i++){

                if (func_get_arg($i) > $mayor) {
                    $enOrden[$j] = func_get_arg($i);
                    $mayor = $enOrden[$j];
                }
            }


        }

        return $enOrden;

    }
}


var_dump(ordenar(4,7,13));

?>