<?php

function isOdd(int $nombre) :bool
{
    if($nombre %2 === 0){
        return true;
    }
    else{
        return false;
    }
}

echo "{isOdd(12)}<br>"; // doit afficher 1 ou true
echo "{isOdd(29)}<br>"; // doit afficher 0 ou false