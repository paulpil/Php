<?php

/**
 * Additionner les valeurs du tableau suivant en fonction de leur index et
 * créer un nouveau tableau
 */
$array1 = array(
    10, 12, 13, 18, 20, 2, 5// , 23
);

$array2 = array(
    11, 1, 134, 8, 45, 26, 59// , ??
);

$array3 = [];

//$index = 1;
foreach ($array1 as $index => $other) {

//    if(!isset($array2[$index])) {
//        $array2[$index] = 0;
//    }
//    $array1[$index] = !isset($array1[$index]) ? 0 : $array1[$index];
//    $array2[$index] = !isset($array2[$index]) ? 0 : $array2[$index];

    $sum = $array1[$index] + $array2[$index];

    $array3[] = $sum;
}



var_dump($array3);