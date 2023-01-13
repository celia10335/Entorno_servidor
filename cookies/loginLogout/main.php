<?php
session_start();

// Vista de bienvenida, si el usuario y contraseña son correctos

echo "<div style='border: solid cadetblue 2px; width: 800px; padding: 0 20px 5px 20px'>";

echo "<h3>Bienvenido, ".$_SESSION['usuario'] . "</h3>";

// Enlace para cerrar sesión, que lleva al archivo correspondiente "logout.php"
echo "<h4><a href='./logout.php'>Cerrar sesión</a></h4>";

echo "</div>";

?>