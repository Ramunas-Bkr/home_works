<?php

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki 3000, kurie
// dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio
// skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi
// rezultatai matytųsi ekrane.

$numbers = '';

for ($i=0; $i<3000; $i++) {
    if ($i%77 == 0) {
        $numbers = $numbers.$i.', ';
    }
}
$numbers = substr($numbers, 0, -2);

echo $numbers;

