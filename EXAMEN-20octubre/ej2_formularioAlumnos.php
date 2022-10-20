<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario alumnos</title>
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

    if (isset($_POST["alumnos"]) && empty($_POST["Aceptar"])) {
        $numAlumnos = $_POST['alumnos'];

        echo "<table>";
        echo "<form action='#' method='post'>";
        echo "<input type='hidden' name='alumnos' value='$numAlumnos'>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellidos</th>";
        echo "<th>Año nacimiento</th>";
        echo "</tr>";

        for ($i = 0; $i < $numAlumnos; $i++) {
            echo "<tr>";

            echo "<td><input type='text' name='nombre$i'></td>";
            echo "<td><input type='text' name='apellidos$i'></td>";
            echo "<td><input type='number' name='anyoNacim$i'></td>";

            echo "</tr>";
        }
        echo "</table>";
        echo "<p><input type='submit' name='Aceptar' value='Aceptar'></p>";
        echo "</form>";

        
    } elseif (isset($_POST["Aceptar"])) {
        $alumnos = $_POST['alumnos'];

        $array_pers = [[]];

        for ($i = 0; $i < $alumnos; $i++) {
            $nombre = 'nombre' . $i;
            $nom = $_POST[$nombre];

            $apellidos = 'apellidos' . $i;
            $apell = $_POST[$apellidos];

            $anyoNacim = 'anyoNacim' . $i;
            $nacim = $_POST[$anyoNacim];
            array_push($array_pers, ["nombre" => $nom,"apellido" => $apell,"anyo" => $nacim]);

        }

        foreach($array_pers as $p){
            echo ("Alumno: <br>");
        
            foreach ($p as $clave => $valor){
                echo $clave." : ".$valor."<br>";
            }
        
        }


    } else {

    ?>

        <form action="#" method="post">
            <p><label for="alumnos">Determina cuántos alumnos quiere registrar</label>
                <input type="number" name="alumnos" id="numAlumnos">
            </p>

            <input type="submit" value="Enviar">
        </form>

    <?php

    }

    ?>

</body>

</html>