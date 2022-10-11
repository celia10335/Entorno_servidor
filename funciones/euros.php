<?php

function euros2pesetas($euros, $cotiza = 166.386)
{
    return round(($euros * $cotiza), 3);
}

function pesetas2euros($pesetas, $cotiza = 166.386)
{
    return round(($pesetas / $cotiza), 2);
}

?>