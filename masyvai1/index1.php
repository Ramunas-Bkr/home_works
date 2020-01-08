<?php

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių
// reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];

for ($i = 0; $i < 30; $i++) {
    $masyvas[$i] = rand (5,25);
}

_dc($masyvas);

// 2. Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b) Raskite didžiausią masyvo reikšmę;
// c) Suskaičiuokite visų reikšmių sumą;
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo
// reikšmes minus tos reikšmės indeksas;
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo
// 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi
// būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu
// jie didesni už 15;
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė
// didesnė už 10;
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus
// turinčius porinį indeksą;

$bigger10 = 0;
foreach ($masyvas as $val) {
    if ($val > 10) {
        $bigger10++;
    }
}
_dc("2a uzduotis)<br>Masyve skaiciu didesniu uz 10 yra: $bigger10");

$biggest = max($masyvas);
_dc("2b uzduotis)<br>Masyvo didziausias skaicius yra: $biggest");

$summ = 0;
foreach ($masyvas as $val) {
    $summ += $val;
}
_dc("2c uzduotis)<br>Masyvo suma lygi: $summ");
$index = 0;
foreach ($masyvas as $val) {
    $valMinus = $val - $index;
    $masyvas2[] = $valMinus;
    $index++;
}
_dc($masyvas2);

for ($i = 30; $i<40; $i++) {
    $masyvas[$i] = rand (5,25);
}

_dc($masyvas);

foreach ($masyvas as $val) {
    if ($val%2 == 0) {
        $porinisMasyvas[] = $val;
    } else {
        $neporinisMasyvas[] = $val;
}}
_dc($porinisMasyvas);
_dc($neporinisMasyvas);

$masyvasG = $masyvas;

for ($i = 0; $i<39; $i++) {
    if ($i%2 == 0 && $masyvasG[$i] > 15) {
        $masyvasG[$i] = 0;
    }
}

_dc($masyvasG);

$index = 0;
foreach ($masyvas as $val) {
    if ($val > 10) {
    break;
    } else {
        $index++;
    }
}

_dc("Maziausias indeksas, kurio reiksme didesne uz 10 yra: $index");

$masyvasI = $masyvas;

for ($i = 0; $i<39; $i++) {
    if ($i%2 == 0) {
        unset($masyvasI[$i]);
    }
}

_dc($masyvasI);