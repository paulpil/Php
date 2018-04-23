<?php

/**
 * Créer un script qui prend en paramètre :
 * --username=USERNAME
 * --email=EMAIL
 *
 * Transformer ces paramètres dans tableau ayant la forme suivante :
 * [
 *  "username" => USERNAME,
 *  "email" => EMAIL
 * ]
 */

$parameters = [];

foreach ($argv as $index => $value) {
    if($index > 0) {
        $params = str_replace('--', '', $value);
        $paramsExploded = explode('=', $params);

        $parameters[$paramsExploded[0]] = $paramsExploded[1];
    }
}

var_dump($parameters);