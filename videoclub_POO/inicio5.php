<?php
include "./CintaVideo.php";
include "./Dvd.php";
include "./Juego.php";
include "./Cliente.php";

// Instanciar dos clientes
$cliente1 = new Cliente("Bruce Wayne", 23);
$cliente2 = new Cliente("Clark Kent", 33);

// Mostrar el número de cada cliente creado
echo "<br>Identificador del cliente 1: ".$cliente1->getNumero();
echo "<br>Identificador del cliente 2: ".$cliente1->getNumero();

// Instanciar soportes
$soporte1 = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
$soporte2 = new Juego("The Last of Us Part II", 26, 49.99, "PSP", 1, 1);
$soporte3 = new Dvd("Origen", 24, 15, "es, en, fr", "16:9");
$soporte4 = new Dvd("El Imperio Contraataca", 4, 3, "es, en, fr", "16:9");

// Alquilo algunos soportes
$cliente1->alquilar($soporte1);
$cliente1->alquilar($soporte2);
$cliente1->alquilar($soporte3);

// recuento los soportes que tiene el cliente
$cliente1->listarAlquileres();


echo "<hr>";

// intento alquilar de nuevo un soporte que ya tiene alquilado
$cliente1->alquilar($soporte1);

//  este soporte no lo tiene alquilado, no puede devolverlo
$cliente1->devolver(4);

// este soporte sí lo puede devolver
$cliente1->devolver(23);


// alquilar soporte (ahora tiene 2 alquilados)
$cliente1->alquilar($soporte4);


// el cliente 2 no tiene alquileres, va a intentar devolver uno
$cliente2->devolver(2);

// recuento los soportes que tiene el cliente 2
$cliente2->listarAlquileres();

echo "<hr>";
// histórico de soportes alquilados por el cliente 1
echo "<br>Recuento histórico de productos alquilados por ".$cliente1->getNombre().": ".$cliente1->getNumSoportesAlquilados();

// histórico de soportes alquilados por el cliente 2
echo "<br>Recuento histórico de productos alquilados por ".$cliente2->getNombre().": ".$cliente2->getNumSoportesAlquilados();

?>