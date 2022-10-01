<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario tabla</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            border: 3px solid grey;
            width: 20px;
            padding: 6px;
        }
    </style>
</head>

<body>

    <?php

    if (isset($_GET["personas"]) && empty($_GET["Aceptar"])) {
        $numpersonas = $_GET['personas'];

        echo "<table>";
        echo "<form action='#' method='get'>";
        echo "<input type='hidden' name='personas' value='$numpersonas'>";

        for ($i = 0; $i < $numpersonas; $i++) {
            echo "<tr>";

            echo "<td><input type='text' name='nombre$i'></td>";
            echo "<td><input type='number' name='altura$i'></td>";
            echo "<td><input type='email' name='email$i'></td>";

            echo "</tr>";
        }
        echo "</table>";
        echo "<p><input type='submit' name='Aceptar' value='Aceptar'></p>";
        echo "</form>";
    } elseif (isset($_GET["Aceptar"])) {
        $personas = $_GET['personas'];

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Altura</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        $array_pers = [[]];

        for ($i = 0; $i < $personas; $i++) {
            $nombre = 'nombre' . $i;
            $nom = $_GET[$nombre];

            $altura = 'altura' . $i;
            $alt = $_GET[$altura];

            $email = 'email' . $i;
            $ema = $_GET[$email];
            array_push($array_pers, [$nom, $alt, $ema]);

        }

        foreach($array_pers as $p){
            echo "<tr>";
        
            foreach ($p as $valor){
                echo "<td>$valor</td>";
            }
        
            echo "</tr>";
        }

        echo "</table>";


    } else {

    ?>

        <form action="#" method="get">
            <p><label for="personas">Determina cuántas personas quieres sumar</label>
                <input type="number" name="personas" id="numpersonas">
            </p>

            <input type="submit" value="Enviar">
        </form>

    <?php

    }

    ?>

</body>

</html>