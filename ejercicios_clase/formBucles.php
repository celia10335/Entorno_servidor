<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

if(isset($_GET["variables"])){

    $numVariables = $_GET['variables'];

    echo "<p>Hay que calcular $numVariables números</p>";
    echo "<form action='#' method='get'>";
    echo "<input type='hidden' name='variables' value='$numVariables'>";

    for ($i=0; $i<$numVariables; $i++){
        echo "<input type='number' name='var$i'>";  
    }

    echo "<input type='submit' name='sumar' value='sumar'><br>";
    echo "</form>";
 
    if(isset($_GET["sumar"])){

        $numVariables = $_GET['variables'];

        $suma = 0;

        for ($j=0; $j<$numVariables; $j++){

            $var = 'var'.$j;
            $suma+=$_GET[$var];

        }
        

        echo "Resultado: $suma";
    }




} else {


?>

<form action="#" method="get">
    <p><label for="variables">Determina cuántas variables quieres sumar</label>
	<input type="number" name="variables" id="numVariables"></p>

	<input type="submit" value="Enviar">
</form>

<?php

}

?>

</body>
</html>