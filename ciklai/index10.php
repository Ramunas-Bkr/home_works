<?php

// Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite
// pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į
// lentą).
// a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20
// mm. Suskaičiuokite kiek reikia smūgių.
// b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30
// mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija
// tikimybei sumodeliuoti), kad smūgis nepataikys į vinį.
// Suskaičiuokite kiek reikia smūgių.

$weakKickQuantity = 0;
$weakSum = 0;

do {
    $weakKick = rand (5,20);
    $weakKickQuantity++;
    $weakSum += $weakKick; 
} while ($weakSum < 85);

$strongKickQuantity = 0;
$strongSum = 0;

do {
    $x = rand (0,1);
    if ($x == 1) {
        $strongKick = rand (20,30);
    $strongKickQuantity++;
    $strongSum += $strongKick;
    } else {
        $strongKickQuantity++;
    }
    
} while ($strongSum < 85);

echo "Kalant silpnai vinis ikaltas per $weakKickQuantity smugiu. <br> Kalant stipriai su 50 proc. tikimybe nepataikyti, vinis ikalama per $strongKickQuantity smugiu";