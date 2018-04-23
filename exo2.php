<?php

/**
 * Multipier les chiffres 2 et 3 sans le signe multiplier
 * Multipier les chiffres 3 et 3 sans le signe multiplier
 * Multipier les chiffres 10 et 3 sans le signe multiplier
 */

//var_dump(2*3);
//var_dump(3 + 3);
//
//var_dump(3*3);
//var_dump(3 + 3 + 3);
$a = 10;
$b = 3;

$sum = 0;

//for($i = 0; $i < $a; $i++) {
//    $sum += $b;
//}
//
//var_dump($sum);

$i = 0;

while ($i < $a) {
    $sum += $b;
    $i++;
}

var_dump($sum);