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
$filas = 4;
$columnas = 6;

for ($i=0; $i<$filas; $i++){

    echo "<tr>";

    for ($j=0; $j<$columnas; $j++){
        
        echo "<td>fila ".($i+1).", columna ".($j+1)."</td>";

    }

    echo "</tr>";

}

?>

</table>

<?php



?>
</body>
</html>