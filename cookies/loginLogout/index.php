<?php
session_start();

include_once './cabecera.html';
include_once '.login.php';

if (isset($_SESSION['usuario'])){
    include_once './main.php';
}

// Si no ha iniciado sesión, o no existe usuario o ha cerrado la sesión
else{
    include_once './iniciaSesion.php';
}


include_once './cierre.html';

?>