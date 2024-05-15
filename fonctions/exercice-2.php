<?php

function average(array $numbers) : float
{
    $sum = 0;

    foreach ($numbers as $number)
    {
        $sum = $sum + $number;
    }

    return $sum / count($numbers);
}
echo average([12, 15, 18, 9]). "<br>"; // doit afficher 13.5
echo average([12, 15, 18, 11, 14]). "<br>"; // doit afficher 14