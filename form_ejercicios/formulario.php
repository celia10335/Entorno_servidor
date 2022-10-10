<?php

$numVariables = $_POST['variables'];

echo "<p>Hay que calcular $numVariables números</p>";
echo "<form action='suma.php' method='post'>";
echo "<input type='hidden' name='variables' value='$numVariables'>";

for ($i=0; $i<$numVariables; $i++){
    echo "<input type='number' name='var$i'>";  
}

echo "<input type='submit' name='sumar' value='sumar'><br>";
echo "</form>";

?>