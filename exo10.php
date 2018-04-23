<?php

/**
 * Créer une fonction qui permet la multiplication de 2 nombres
 * sans le signe multiplié et sans boucle.
 */

//function multiply($a, $b, $i = 1, $sum = 0) {
//    $sum += $b;
//
//    if($i < $a) {
//        $i++;
//        return multiply($a, $b, $i, $sum);
//    }
//
//    return $sum;
//}
//


function multiply($a, $b, $res = 0) {
    $res += $b;

    $a--;
    if($a == 0) {
        return $res;
    }

    return multiply($a, $b, $res);
}

var_dump(multiply(2, 3));
var_dump(multiply(3, 3));

