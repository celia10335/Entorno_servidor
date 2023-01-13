<?php
// Desde este php se reinicia el contador y redirige a la página principal. Lo hice así, de forma separada, porque si no, cada vez que recargaba la página el contador se iniciaba en 1.
setcookie("contador", $visitas, 1);
header('Location: contador_visitas.php');
?>