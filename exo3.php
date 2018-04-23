<?php

/**
 * Ordonner les valeurs du tableau par ordre croissant sans
 * fonction PHP (https://www.youtube.com/watch?v=lyZQPjUT5B4)
 */
$notes = array(
    10, 12, 13, 18, 20, 2, 5
);

//$start = true;
//
//while($start) {
//    $start = false;
//
//    for($i = 0; $i < count($notes) - 1; $i++) {
//        if($notes[$i] > $notes[$i + 1]) {
//            $tmp = $notes[$i];
//            $notes[$i] = $notes[$i + 1];
//            $notes[$i + 1] = $tmp;
//
//            $start = true;
//        }
//    }
//}
//
//var_dump($notes);

//$j = 0;
//
//while($j < count($notes) - 1) {
//    if($notes[$j] > $notes[$j + 1]) {
//        $tmp = $notes[$j];
//        $notes[$j] = $notes[$j + 1];
//        $notes[$j + 1] = $tmp;
//
//        if($j != 0) {
//            $j--;
//        }
//    } else if ($j < count($notes) - 1) {
//        $j++;
//    }
//}
//
//var_dump($notes);

for($i = 1; $i < count($notes); $i++) {
    if($notes[$i] < $notes[$i - 1]) {
        $tmp = $notes[$i];
        $notes[$i] = $notes[$i - 1];
        $notes[$i - 1] = $tmp;

        $i -= 2;

        $i = $i < 0 ? 0 : $i;
//        if($i < 0) {
//            $i = 0;
//        }
    }
}

var_dump($notes);












