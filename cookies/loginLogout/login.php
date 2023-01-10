<?php
 session_start();

if ($_GET['nomUsuario'] == "Admin") {

$_SESSION['usuario'] = 'Admin';

echo "Sesión iniciada";


}

else{
   //header(location './index.php');
   echo "No existe el usuario";
}
// //unset($_SESSION);
// //session_destroy();
?>