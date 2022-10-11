<?php

include_once "euros.php";

$euros = 3000;
$pesetas = 500000;
$cotizacion1 = 180.5;
$cotizacion2 = 159.75;
$cotizacion3 = 200;

$eur2pes = euros2pesetas($euros);
$eur2pes_cot1 = euros2pesetas($euros, $cotizacion1);
$eur2pes_cot2 = euros2pesetas($euros, $cotizacion2);
$pes2eur = pesetas2euros($pesetas);
$pes2eur_cot2 = pesetas2euros($pesetas, $cotizacion2);
$pes2eur_cot3 = pesetas2euros($pesetas, $cotizacion3);


echo ($euros." euros son ".$eur2pes." pesetas <br>");
echo ($euros." euros, suponiendo un factor de ".$cotizacion1." son ".$eur2pes_cot1." pesetas <br>");
echo ($euros." euros, suponiendo un factor de ".$cotizacion2." son ".$eur2pes_cot2." pesetas <br>");
echo ("<hr>");
echo ($pesetas." pesetas son ".$pes2eur." € <br>");
echo ($pesetas." pesetas, suponiendo un factor de ".$cotizacion2." son ".$pes2eur_cot2." € <br>");
echo ($pesetas." pesetas, suponiendo un factor de ".$cotizacion3." son ".$pes2eur_cot3." € <br>");

?>