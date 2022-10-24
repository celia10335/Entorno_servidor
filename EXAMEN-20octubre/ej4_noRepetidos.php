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

// En el array unidimensional $repositorio, almaceno todos los número aleatorios obtenidos, así me es más fácil compararlos todos con cada nuevo número aleatorio.
// Si un número aleatorio nuevo se repite, la variable $repite dará true y generará un nuevo número mediante un do...while. Así hasta que dé false (es decir, "no está repetido").
// Paralelamente, cada número obtenido de esta manera, se almacena en el array bidimensional $numeros. Los bucles for van avanzando según sus límites (filas y columnas), a excepción de la primera iteración ($i==0 && $j==0), que no tiene con qué comparar.
    $numeros = [[]];
    $repositorio = [];
    $repite = false;

    echo "<table>";

    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";

        for ($j = 0; $j < 8; $j++) {

            if ($j == 0 && $i == 0) {
                $numeros[$i][$j] = rand(100, 999);
                $repositorio[] = $numeros[$i][$j];
                echo  "<td>" . $numeros[$i][$j] . " </td>";

            } else {

                do {
                    $aleatorio = rand(100, 999);
                    $repite = false;

                    foreach ($repositorio as $r) {
                        if ($r == $aleatorio) {
                            $repite = true;
                        }
                    }
                } while ($repite == true);


                $numeros[$i][$j] = $aleatorio;
                $repositorio[] = $aleatorio;
                echo  "<td>" . $numeros[$i][$j] . " </td>";
            }
        
        }

        echo "</tr>";
    }

    echo "</table>";

    echo ("repositorio:<br>");
    foreach($repositorio as $r){
        echo $r." ";
    }




    ?>


</body>

</html>