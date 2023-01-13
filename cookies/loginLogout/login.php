<?php
session_start();

// Una vez enviados los datos desde el formulario de "index", se comprueba si el usuario y la contraseña existen. En caso afirmativo, volverá a la vista "index", desde donde se cargará la vista "main" con el mensaje de bienvenida.

 if ($_GET['nomUsuario'] == "Admin" && $_GET['contras'] == "admin") {

$_SESSION['usuario'] = 'Admin';

header('Location: index.php');

}

// Si el usuario no existiera o la contraseña fuera incorrecta, lanzará un mensaje de error y volverá a cargar el formulario.

 else{
   echo "<p style='font-style: italic; color: lightcoral'>No existe el usuario o los datos son incorrectos, inténtelo de nuevo</p>";

   include_once './iniciaSesion.php';
 }
?>