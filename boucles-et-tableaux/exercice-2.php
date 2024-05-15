<?php

$numbers = [28, 32, 44, -67, 18, 24, -98];

foreach ($numbers as $key => $number){
   if ($number < 0){
    echo $number;
    echo "<br>";
   }
}