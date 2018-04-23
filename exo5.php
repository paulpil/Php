<?php

/**
 * Multiplier les valeurs du tableau suivant par 2
 * Retourner dans le même tableau les valeurs
 * de la multiplication
 */
$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

//foreach ($notes as $index => $value) {
//    $notes[$index] = $value * 2;
//}

for($i = 0; $i < count($notes); $i++) {
    $notes[$i] *= 2;
}

var_dump($notes);

