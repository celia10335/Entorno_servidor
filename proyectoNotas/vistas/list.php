<?php

// echo("<br>Conectado a vista 'Lista'<br>");
// var_dump($datos);
echo "<h1>Listado de notas</h1>";
echo "<main>";

if(count($datos)>0){
    foreach ($datos as $n){
        echo "<div class='contenedor'>";
        echo "<div class='nota'><h4>".$n->titulo."</h4><hr><p>".$n->contenido."</p></div>";
        echo "<div>Borrar</div><div>Editar</div>";
echo "</div>";
    }
}

echo "</main>";

?>