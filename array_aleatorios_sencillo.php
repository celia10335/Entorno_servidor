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

    $numeros = [[]];
    $repositorio = [];
    $repite = false;

    echo "<table>";

    for ($i = 0; $i < 4; $i++) {
        echo "<tr>";

        for ($j = 0; $j < 5; $j++) {

            if ($j == 0 && $i == 0) {
                $numeros[$i][$j] = rand(1, 20);
                $repositorio[] = $numeros[$i][$j];
                echo  "<td>" . $numeros[$i][$j] . " </td>";

            } else {

                do {
                    $aleatorio = rand(1, 20);
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




    ?>


</body>

</html>