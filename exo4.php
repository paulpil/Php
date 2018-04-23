<?php

/**
 * Alice à 6 ans
 * Boby à 10 ans
 * John à 15 ans
 *
 * Catégories :
 * - ”Poussin” de 6 à 7 ans
 * - ”Pupille” de 8 à 9 ans
 * - ”Minime” de 10 à 11 ans
 * - ”Cadet” après 12 ans
 *
 * - Créer un tableau avec les personnes et leur age respectif
 * - Créer une boucle permettant d'afficher les personnes dans les
 * groupes auxquels ils sont associés
 */

$users = [
    [
        'name' => 'Alice',
        'age' => 6
    ],
    [
        'name' => 'Boby',
        'age' => 10
    ],
    [
        'name' => 'John',
        'age' => 15
    ]
];

foreach ($users as $user) {
    $age = $user['age'];

    if($age >= 6 && $age <= 7) {
        var_dump("poussin");
    } else if($age >= 8 && $age <= 9) {
        var_dump("Pupille");
    } else if($age >= 10 && $age <= 11) {
        var_dump("Minime");
    } else {
        var_dump("Cadet");
    }
}

