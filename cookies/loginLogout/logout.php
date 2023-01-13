<?php
session_start();
// Cierra la sesión y redirige a la página de inicio con el formulario

unset($_SESSION);
session_destroy();


header('Location: index.php');
?>