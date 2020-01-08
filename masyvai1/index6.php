<?php

// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki
// 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y.
// neturi kartotis).



$randomArray1 = [];
$randomArray2 = [];

for ($i=0; $i<100; $i++)
{
  $randomNumber = rand(100,999);
  while(in_array($randomNumber, $randomArray1)) {
    $randomNumber = rand(100,900);
  }
  $randomArray1[] = $randomNumber;
}
for ($i=0; $i<100; $i++)
{
  $randomNumber = rand(100,999);
  while(in_array($randomNumber, $randomArray2)) {
    $randomNumber = rand(100,900);
  }
  $randomArray2[] = $randomNumber;
}

_dc($randomArray1);
_dc($randomArray2);

// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6
// uždavinio masyve, bet nėra antrame 6 uždavinio masyve.

$array7 = array_diff($randomArray1, $randomArray2);
_dc($array7);


// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio
// masyvuose.

$array8 = array_intersect($randomArray1, $randomArray2);
_dc($array8);

// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo
// reikšmės, o jo reikšmės iš būtų antrojo masyvo.

$array9 = [];
for ($i=0; $i<100; $i++) {
    $index = $randomArray1[$i];
    $array9[$index] = $randomArray2[$i]; 
}

_dc($array9);