<?php
//echo "debug<br>";
//echo $_GET['nomUsuario'];
session_start();

 if ($_GET['nomUsuario'] == "Admin" && $_GET['contras'] == "admin") {

$_SESSION['usuario'] = 'Admin';

header('Location: https://localhost/php/Entorno_servidor/cookies/loginLogout/');

}

 else{
   echo "<p style='font-style: italic; color: lightcoral'>No existe el usuario o los datos son incorrectos, inténtelo de nuevo</p>";

   include_once './iniciaSesion.php';
 }
?>