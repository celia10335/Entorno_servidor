<?php

include_once 'funcion_media.php';

$elementos = $_POST['numeros'];
$arrayNumeros = [];


if (isset($_POST['calcular'])){

    for ($i=0; $i<$elementos; $i++){
        $var = 'var'.$i;
        $arrayNumeros[$i] = $_POST[$var];
    }

   $resultado = media($arrayNumeros);

   echo ("La media de los números introducidos es ".$resultado);


} else {

    echo "<p>Introduzca $elementos números</p>";
    echo "<form action='#' method='post'>";
    echo "<input type='hidden' name='numeros' value='$elementos'>";
    
    for ($i=0; $i<$elementos; $i++){
        echo "<input type='number' name='var$i'>";  
    }
    
    echo "<input type='submit' name='calcular' value='calcular'><br>";
    echo "</form>";
}

?>