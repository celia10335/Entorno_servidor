<?php

// echo("<br>Conectado a vista 'Lista'<br>");
// var_dump($datos);
echo "<h1>Listado de notas</h1>";
echo "<main>";

if (count($datos) > 0) {
    foreach ($datos as $n) {
        echo "<div class='contenedor'>";
        echo "<div class='nota'><h4>" . $n->titulo . "</h4><hr><p>" . $n->contenido . "</p></div>";
        echo "<div><a href='index.php?action=delete&id=" . $n->id . "'>Borrar</div>";
        echo "<div><a href='index.php?action=edit&id=" . $n->id . "'>Editar</div>";
        echo "</div>";
    }
}

echo "<div class='add'><a href='index.php?action=insert'>Nueva nota</a></div>";

echo "</main>";
