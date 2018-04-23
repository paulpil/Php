<?php

/**
 * Calculer la moyenne des notes de ce tableau par l'intermédiare
 * d'une fonction nommée customAverage sans la fonction somme de PHP.
 */

$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

function customAverage($array) {
    $sum = 0;

    foreach ($array as $note) {
        $sum += $note;
    }

    return $sum / count($array);
}

var_dump(customAverage($notes));
var_dump(customAverage([
    100, 200, 300, 400, 500
]));