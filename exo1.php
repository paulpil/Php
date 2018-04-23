<?php

/**
 * Calculer la moyenne des notes de ce tableau.
 */
$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

// var_dump(array_sum($notes) / count($notes));

//$i = 0;
//$my = 0;
//
//while($i < count($notes)) {
//    $my += $notes[$i];
//
//    $i++;
//}
//
//var_dump($my / count($notes));

$sum = 0;

foreach ($notes as $note) {
    $sum += $note;
}

$average = $sum / count($notes);

var_dump(number_format($average, 2));