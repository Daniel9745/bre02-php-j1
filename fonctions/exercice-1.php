<?php

function concat(string $string, string $strings) :string
{
    return $string . $strings;
}

echo concat("Hello ", "World !<br>");
echo concat("À la ", "claire fontaine<br>");
echo concat("La vie, l'univers ", "et tout le reste<br>"); 