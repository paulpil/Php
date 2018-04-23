<?php

/**
 * Multiplier les valeurs du tableau suivant par la valeur précédente
 * sachant que la première multiplication est de 1
 */
$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

//$lastNote = 1;
//
//foreach ($notes as $index => $note) {
//    $note *= $lastNote;
//
//    $lastNote = $note;
//
//    $notes[$index] = $note;
//}
//
//var_dump($notes);

for($i = 1; $i < count($notes); $i++) {
    $notes[$i] *= $notes[$i - 1];
}

var_dump($notes);