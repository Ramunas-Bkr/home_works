<?php

// 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis
// 200. Suskaičiuokite kiek yra kiekvienos raidės.

$string = 'ABCD';

for ($i = 0; $i < 200; $i++) {
    $lettersArray[$i] = randomChars($string, 1);
}

function randomChars($str, $numChars){
    return substr(str_shuffle($str), 0, $numChars);
}

$a = 0;
$b = 0;
$c = 0;
$d = 0;

foreach ($lettersArray as $val) {
    if ($val == 'A') {
        $a++;
    } elseif ($val == 'B') {
        $b++;
    } elseif ($val == 'C') {
        $c++;
    } else {
        $d++;
    }
}
_dc ($lettersArray);
_dc ('Masyve yra:<br>raidziu A: '.$a.', raidziu B: '.$b.', raidziu C: '.$c.', raidziu D: '.$d);

$indexABC = 0;

foreach ($lettersArray as $val) {
    if ($val == 'A') {
        $arrayABC[$indexABC] = $val;
        $indexABC++;
    } else {
        continue;
    }
}
foreach ($lettersArray as $val) {
    if ($val == 'B') {
        $arrayABC[$indexABC] = $val;
        $indexABC++;
    } else {
        continue;
    }
}
foreach ($lettersArray as $val) {
    if ($val == 'C') {
        $arrayABC[$indexABC] = $val;
        $indexABC++;
    } else {
        continue;
    }
}
foreach ($lettersArray as $val) {
    if ($val == 'D') {
        $arrayABC[$indexABC] = $val;
        $indexABC++;
    } else {
        continue;
    }
}

_dc($arrayABC);