<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style>
    table{
        border-collapse: collapse;
        text-align: center;
    }
    tr{        
        padding: 9px;
    }
    td, th{
        border: 3px solid grey;
        width: 20px;
        padding: 6px;
    }
    th {
        background-color: blue;
        color: white;
    }
    #primera_columna{
        background-color: orange;
    }
</style>
</head>
<body>

<table>

<?php
$filas = 11;
$columnas = 11;

// Fila de encabezado
echo "<tr><th>x</th>";

for ($j=0; $j<$columnas; $j++){
        
    echo "<th>$j</th>";

}

echo "</tr>";


//Columna de encabezado
for ($i=0; $i<$filas; $i++){

    ?>

<tr><th id="primera_columna"><?=$i?></th>

<?php

    

    for ($j=0; $j<$columnas; $j++){
        
        echo "<td>".($i*$j)."</td>";

    }
}

    echo "</tr>";

?>

</table>

<?php



?>
</body>
</html>