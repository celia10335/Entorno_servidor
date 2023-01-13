<?php
// Inicializo la visita en 1 y creo la cookie
$visitas = 1;
setcookie("contador", $visitas);


// Si la cookie está creada, la variable "visitas" se incrementa en 1 cada vez que se recargue la página. Este valor se almacena en la cookie
if (isset($_COOKIE["contador"])) {
    $visitas = $_COOKIE["contador"] + 1;
    setcookie("contador", $visitas);

// El mensaje que devuelve la página es el valor almacenado en la cookie desde la recarga anterior. Por eso, para que sea real, tengo que incrementarlo en 1. El valor actual no lo leerá el navegador hasta que se abandone la página
    echo "Contador: visitaste esta página " . $_COOKIE["contador"] + 1 . " veces";



} else {
// Si no hay cookie aún por ser la primera visita, el mensaje será diferente ("es la primera visita...")    
    echo "Contador: es la primera vez que visitas esta página";
}


echo "<p>Pulsa aquí para reiniciar el contador</p>";
?>

<!-- El enlace lleva a otro php para poner el contador a cero -->
<div
    style="height: 24px; width: 215px; border: solid 1px grey; margin-top: 20px; padding:10px; background-color:white; font-size:1.1em">
    <a href="./reiniciar_contador.php">Reiniciar</a>
</div>
