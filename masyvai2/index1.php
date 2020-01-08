<?php

// Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš
// 5 elementų su reikšmėmis nuo 5 iki 25.

foreach(range(1,10) as $val_d) {
    foreach(range(1,5) as $val_m) {
        $x = rand(5,25);
        $mas2[$val_d][$val_m] = $x; 
    }

}

_dc($mas2);

// Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;

$bigger10 = 0;

foreach ($mas2 as $val) {
	foreach($val as $key=>$val1) {
        if ($val1 > 10) {
            $bigger10++;
        }
    }
}
_dc ("Reiksmiu didesniu uz 10 masyve yra $bigger10");



// b) Raskite didžiausio elemento reikšmę;

$maxNumber = 0;
foreach ($mas2 as $val) {
	foreach($val as $key=>$val1) {
		if ($val1 > $maxNumber) {	 	
        $maxNumber = $val1;
    	}
	}   	
}
_dc ("Didziausias skaicius masyve: $maxNumber");

// $maxNumber2 = array_map(max($mas2));

// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais
// indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$res = array();
foreach($mas2 as $val) {
    foreach($val as $key => $val1) {
        (!isset($res[$key])) ? $res[$key] = $val1 : $res[$key] += $val1;
    }
}

_dc($res);

// d) Visus masyvus “pailginkite” iki 7 elementų

$vald = 1;
do {
    $newdata = rand (5,25);
    array_push($mas2[$vald],$newdata);
    $vald++;
} while ($vald < 11);

$vald = 1;
do {
    $newdata = rand (5,25);
    array_push($mas2[$vald],$newdata);
    $vald++;
} while ($vald < 11);

_dc($mas2);

// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą
// atskirai ir sumas panaudokite kaip reikšmes sukuriant naują
// masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio
// masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai

$masSum[] = '';
$sum = 0;

foreach ($mas2 as $val) {
	foreach($val as $key=>$val1) {
       $masSum[$key-1] = array_sum($mas2[$key]);
    }
}

_dc($masSum);