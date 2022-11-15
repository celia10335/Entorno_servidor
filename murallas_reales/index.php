<?php
include_once "./conectar.php";


$sql = "SELECT id_grupo, nombre FROM Grupo";

$resultado = $conexion->query($sql);


?>


<h2>Selecciona listado a consultar</h2>
   

<section>
<div class="boton"><a href="consulta_grupos.php">GRUPOS</div>
    <div class="espacio"></div>
    <div class="boton"><a href="consulta_totalAlumnos.php">ALUMNOS</div>
    <div class="espacio"></div>
    <div class="boton"><a href="consulta_profesores.php">PROFESORES</div>
</section>


    <?php


    $conexion->close();
    ?>

</body>

</html>