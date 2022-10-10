<?php

include_once "funciones_form.php";

if (isset($_POST['sumar'])){
    sumarVariables($numVariables);
}
elseif (isset($_POST['enviar'])) {
crearInputs($numVariables);
}
else {
    echo '<form action="#" method="post">
    <p><label for="variables">Determina cuántas variables quieres sumar</label>
        <input type="number" name="variables" id="numVariables"></p>
        <input type="submit" name="enviar" value="Enviar">
</form>';
    
}

?>