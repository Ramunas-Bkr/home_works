<?php

// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus,
// sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių reikšmių
// kombinacijų gavote.

$string = 'ABCD';

for ($i = 0; $i < 200; $i++) {
    $array1[$i] = randomChars($string, 1);
}
for ($i = 0; $i < 200; $i++) {
    $array2[$i] = randomChars($string, 1);
}
for ($i = 0; $i < 200; $i++) {
    $array3[$i] = randomChars($string, 1);
}

function randomChars($str, $numChars){
    return substr(str_shuffle($str), 0, $numChars);
}

for ($i = 0; $i < 200; $i++) {
    $generalArray[$i] = $array1[$i].$array2[$i].$array3[$i];
}

_dc($generalArray);

$sameArray = array_unique($generalArray);

$unical = count($sameArray);

_dc("Masyve yra $unical unikaliu reiksmiu");

