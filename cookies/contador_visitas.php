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

<div
    style="height: 24px; width: 215px; border: solid 1px grey; margin-top: 20px; padding:10px; background-color:white; font-size:1.1em">
    <a href="./contador_visitas.php?reiniciar=true">Reiniciar</a>
</div>

<?php

if (isset($_GET["reiniciar"])) {

    if (($_GET["reiniciar"]) == true) {
        setcookie("contador", $visitas, 1);
        ($_GET["reiniciar"]) == false;
    }
}


?>