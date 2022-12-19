<?php

include_once "./Videoclub.php";

$vc = new Videoclub("Severo 8A");

// incluir soportes de prueba
$vc->incluirJuego("God of War", 19.99, "PS4", 1, 1);
$vc->incluirJuego("The Last of Us Part II", 49.99, "PS4", 1, 1);
$vc->incluirDvd("Torrente", 4.5, "es", "16:9");
$vc->incluirDvd("Origen", 4.5, "es, en, fr", "16:9");
$vc->incluirDvd("El Imperio Contraataca", 3, "es, en", "16:9");
$vc->incluirCintaVideo("Los Cazafantasmas", 3.5, 107);
$vc->incluirCintaVideo("El nombre de la Rosa", 1.5, 140);

// listar los productos
$vc->listarProductos();

// crear socios
// Amancio Ortega tiene número 1
$vc->incluirSocio("Amancio Ortega");
// Pablo Picasso tiene número 2
$vc->incluirSocio("Pablo Picasso", 2);


echo "<hr>";
// El socio 2 alquila productos
$vc->alquilarSocioProducto(2,2);
$vc->alquilarSocioProducto(2,3);
$vc->alquilarSocioProducto(2,2);
$vc->alquilarSocioProducto(2,6);

echo "<hr>";
// El socio 1 alquila productos
$vc->alquilarSocioProducto(1,2);
$vc->alquilarSocioProducto(1,3);
$vc->alquilarSocioProducto(1,2);
$vc->alquilarSocioProducto(1,6);
$vc->alquilarSocioProducto(1,1);
// listar socios
echo "<hr>";
$vc->listarSocios();

?>