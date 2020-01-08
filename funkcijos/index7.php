<?php

// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus
// paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis
// masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis
// masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30 kiekį kartų.
// Paskutinio masyvo paskutinis elementas yra lygus 0;

$sk = rand (11,31);
$mas7 = createMas($sk);



function createMas ($param) {
    $firstMas = rand (10,20);
foreach (range(0, $firstMas) as $key) {
    if($firstMas != $key) {
        $mas7[] = rand(0, 10);
    } elseif ($param == 0) {
    $mas7[] = 0;
    }
     else {
        $mas7[] = createMas($param-1);
    }
}
return $mas7;
}

_dc($mas7);

// Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą.

$suma = 0;


function elementuSuma($arr) { 
    global $suma;   
    foreach ($arr as $key => $val) {
        if (is_int($val)) {
            $suma = $suma + $val;
        } else {
            elementuSuma($val);
        }
    }
    return $suma;
}


echo elementuSuma($mas7);