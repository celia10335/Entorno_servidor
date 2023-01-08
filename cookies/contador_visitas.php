<?php
$visitas = 1;
setcookie("contador", $visitas);


if (isset($_COOKIE["contador"])) {
    $visitas = $_COOKIE["contador"] + 1;
    setcookie("contador", $visitas);

    echo "Contador: visitaste esta página " . $_COOKIE["contador"] + 1 . " veces";
} else {

    echo "Contador: es la primera vez que visitas esta página";
}

echo "<p>Pulsa aquí para reiniciar el contador</p>";

?>

<form action="#" method="get">
    <input type="submit" name="boton" value="Reiniciar"></input>
</form>

<?php

if (isset($_GET["boton"])) {
    setcookie("contador", $visitas, 1);
    unset($_GET["boton"]);
}


?>