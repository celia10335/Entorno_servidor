<?php

// echo("<br>Conectado a vista 'Lista'<br>");
// var_dump($datos);
// echo "<br>";

if(count($datos)>0){
    foreach ($datos as $n){
        echo $n->contenido."<br>";
    }
}
?>