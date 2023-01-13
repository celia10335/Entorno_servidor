<?php
session_start();

echo "<div style='border: solid cadetblue 2px; width: 800px; padding: 0 20px 5px 20px'>";

echo "<h3>Bienvenido, ".$_SESSION['usuario'] . "</h3>";

echo "<h4><a href='https://localhost/php/Entorno_servidor/cookies/loginLogout/logout.php'>Cerrar sesión</a></h4>";

echo "</div>";

?>