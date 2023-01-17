<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
    table{
        border-collapse: collapse;
    }
    tr{        
        padding: 9px;
    }
    td{
        border: 3px solid violet;
        padding: 6px;
    }
</style>
</head>
<body>

<table>

<?php
$filas = 7;
$columnas = 5;

for ($i=0; $i<$filas-1; $i++){

    echo "<tr>";

    if ($i==0){

        for ($j=0; $j<$columnas-1; $j++){

                echo "<td>fila ".($i+1).", columna ".($j+1)."</td>";
            
        }


    } else {

        for ($j=0; $j<$columnas-1; $j++){

            if ($j==0) {
                echo "<td>fila ".($i+1).", columna ".($j+1)."</td>";
            
            } else {
                echo "<td> </td>";
            } 
            
        }

    }


    echo "<td>fila ".($i+1).", columna $columnas</td>";


    echo "</tr>";

}

for ($i=0; $i<$columnas; $i++){

    echo "<td>fila $filas, columna ".($i+1)."</td>";
}

?>

</table>

<?php



?>
</body>
</html>