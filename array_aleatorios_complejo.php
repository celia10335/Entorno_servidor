<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatorios irrepetibles</title>
    <style>
        table {
            border-collapse: separate;
            text-align: center;
        }

        td {
            border: 2px solid green;
            width: 60px;
            height: 9px;
            font-size: x-large;
            font-family: sans-serif;
        }
    </style>
</head>

<body>

    <?php

// VARIABLES
$numeros = [[]];
$repositorio = []; // Array simple donde se acumulan todos los valores obtenidos para comprobar que no se repiten
$repite = false;
$filas = 6;
$columnas = 9;
$a = 100; // Límite inferior del intervalo
$b = 999; // Límite superior del intervalo
$max = $a;
$min = $b;
$columna_max = 0;
$fila_min = 0;


// Rellenar el array y obtener máximo y mínimo
for ($i = 0; $i < $filas; $i++) {

    for ($j = 0; $j < $columnas; $j++) {

        if ($j == 0 && $i == 0) {
            $numeros[$i][$j] = rand($a, $b);
            $repositorio[] = $numeros[$i][$j];

        }
        else {

            do {
                $aleatorio = rand($a, $b);
                $repite = false;

                foreach ($repositorio as $r) {
                    if ($r == $aleatorio) {
                        $repite = true;
                    }
                }
            } while ($repite == true);


            $numeros[$i][$j] = $aleatorio;
            $repositorio[] = $aleatorio;

        }
    }


}


// Obtener valores máximo y mínimo
foreach ($repositorio as $r) {
    if ($r < $min) {
        $min = $r;
    }
    if ($r > $max) {
        $max = $r;
    }
}


// Localizar máximo y mínimo
for ($i = 0; $i < $filas; $i++) {

    for ($j = 0; $j < $columnas; $j++) {

        if ($numeros[$i][$j] == $max) {
            $columna_max = $j;
        }
        else if ($numeros[$i][$j] == $min) {
            $fila_min = $i;
        }
    }
}


// Dibujar la tabla, coloreando la fila del mínimo y la columna del máximo
echo "<table>";

for ($i = 0; $i < $filas; $i++) {

    if ($i == $fila_min) {
        echo "<tr style='background-color:orange'>";
    }
    else {
        echo "<tr>";
    }

    for ($j = 0; $j < $columnas; $j++) {

        if ($j == $columna_max) {

            if ($i == $fila_min) {
                echo "<td style='background-color:violet'>" . $numeros[$i][$j] . " </td>";
            }
            else {
                echo "<td style='background-color:green'>" . $numeros[$i][$j] . " </td>";
            }
        }

        else {
            echo "<td>" . $numeros[$i][$j] . " </td>";
        }
    }
    
    echo "</tr>";
}

echo "</table>";


?>

</body>

</html>