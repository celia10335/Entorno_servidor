<?php
session_start();
// Desde el index, se irán mostrando las diferentes vistas según la sesión esté iniciada o no, o en caso de que los datos introducidos sean incorrectos
include_once './cabecera.html';
include_once '.login.php';

// Si hay sesión establecida, se cargará la vista "main" con un mensaje de bienvenida y un botón para cerrar la sesión
if (isset($_SESSION['usuario'])){
    include_once './main.php';
}

// Si no ha iniciado sesión o la ha cerrado, carga la vista "iniciar sesión" con el formulario correspondiente
else{
    include_once './iniciaSesion.php';
}


include_once './cierre.html';

?>