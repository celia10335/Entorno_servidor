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
        $items = $_GET['personas'];

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Altura</th>";
        echo "<th>Email</th>";
        echo "</tr>";

        for ($i = 0; $i < $items; $i++) {
            echo "<tr>";

            $nombre = 'nombre' . $i;
            $celda = $_GET[$nombre];
            echo "<td>$celda</td>";

            $altura = 'altura' . $i;
            $celda = $_GET[$altura];
            echo "<td>$celda</td>";

            $email = 'email' . $i;
            $celda = $_GET[$email];
            echo "<td>$celda</td>";

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