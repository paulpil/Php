<?php

/**
 * Créer une fonction qui permet de calculer la moyenne des notes sans boucles
 * et sans function de moyenne PHP.
 */

$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

function customAverage($array, $i = 0, $sum = 0) {
    $sum += $array[$i];

    if($i < count($array) - 1) {
        $i++;

        return customAverage($array, $i, $sum);
    }

    return $sum / count($array);
}

var_dump(customAverage($notes));
