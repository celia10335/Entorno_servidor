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
$filas = 5;
$columnas = 5;

for ($i=0; $i<$filas; $i++){

    echo "<tr>";

    for ($j=0; $j<$columnas; $j++){

        if ($i==$j){
            echo "<td> X </td>";

        } elseif ($i+1 == $columnas-$j) {
            echo "<td> X </td>";

        } else {
            echo "<td>   </td>";

        }
        
    }

    


    echo "</tr>";

}


?>

</table>

<?php



?>
</body>
</html>