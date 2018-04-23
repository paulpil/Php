<?php

/**
 * Créer une fonction  qui dit si les nombres suivant sont pair ou impair
 */

$numbers = [
    10,
    13,
    3,
    4,
    6
];

//function testImp($number) {
//    if($number % 2) {
//        return "impair";
//    }
//
//    return "pair";
//}

function testImp($number) {
    return $number % 2 ? "impair" : "pair";
}

foreach ($numbers as $number) {
    var_dump(testImp($number));
}