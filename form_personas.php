
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario tabla</title>
    <style>
        table{
            border-collapse: collapse;
            text-align: center;
        }
        
    th, td{
        border: 3px solid grey;
        width: 20px;
        padding: 6px;
    }
    </style>
</head>
<body>

<?php

$persona1 = ["nombre" => "Alicia", "altura" => 160, "email" => "soyalicia@gmail.com"];

$persona2 = ["nombre" => "Leonardo", "altura" => 180, "email" => "leogarcia@gmail.com"];

$persona3 = ["nombre" => "Rita", "altura" => 185, "email" => "santaritarita@gmail.com"];

$persona4 = ["nombre" => "Dunia", "altura" => 166, "email" => "duniamundo@gmail.com"];

$persona5 = ["nombre" => "Fabián", "altura" => 173, "email" => "fabianpicardo@gmail.com"];

$personas = [$persona1, $persona2, $persona3, $persona4, $persona5];

echo "<table>";

echo "<tr>";

    foreach ($persona1 as $clave => $valor){
        echo "<th>$clave</th>";
    }

echo "</tr>";

foreach($personas as $p){
    echo "<tr>";

    foreach ($p as $clave => $valor){
        echo "<td>$valor</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
    
</body>
</html>