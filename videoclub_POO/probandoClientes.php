<?php
include_once "./Cliente.php";
include_once "./Dvd.php";

$miDvd2 = new Dvd("Origen", 24, 15, "es, en, fr", "16:9");
$clienteUno = new Cliente("Paquita", "00f-1");

$clienteUno->muestraResumen();
$clienteUno->alquilar($miDvd2);

$clienteUno->listarAlquileres();

$clienteUno->soportesEnAlquiler();

?>