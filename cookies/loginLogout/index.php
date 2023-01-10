<?php
include_once './cabecera.html';
include_once './iniciaSesion.php';
include_once '.login.php';

if (isset($_SESSION['usuario'])){
    echo "Hay login";
}

// Si no ha iniciado sesión, o no existe usuario o ha cerrado la sesión
else{

}



include_once './cierre.html';

?>