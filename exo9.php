<?php

/**
 * Créer une fonction  avec 2 paramètres, nommée customMultiply
 * qui retourne une multiplication sans signe multiplié.
 *
 * Vous utiliserez cette fonction dans une boucle permettant de multiplier les
 * valeurs suivantes.
 */

$numbers = [
    [2, 3],
    [3, 3],
    [10, 3],
    [13, 3],
    [13, 10],
];

function customMultiply($a, $b) {
    $sum = 0;

    for($i = 0; $i < $a; $i++) {
        $sum += $b;
    }

    return $sum;
}

function massMultiply($array) {
    foreach ($array as $number) {
        var_dump(customMultiply($number[0], $number[1]));
    }
}

massMultiply($numbers);




