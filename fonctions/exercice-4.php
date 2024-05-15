<?php

function getFirst(array $number) : ? int
{
    if (count($number) > 0){
        return $number[0];
    }
    else{

        return null;
    }
}

echo "{getFirst([13, 24, 45])}<br>"; // doit afficher 13
echo "{getFirst([])}<br>"; // doit afficher null