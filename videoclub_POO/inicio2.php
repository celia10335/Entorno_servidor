<?php


include './CintaVideo.php';

$miCinta = new CintaVideo("Los cazafantasmas", 22, 3.5, 107);


echo "<strong>".$miCinta->titulo."</strong>";
echo "<br>Precio: ".$miCinta->getPrecio()." euros";
echo "<br>Precio IVA incluido: ".$miCinta->getPrecioConIva()." euros";
echo "<br>";
$miCinta->muestraResumen();

?>