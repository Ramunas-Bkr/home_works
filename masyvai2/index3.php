<?php

// Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi
// būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų
// reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro
// lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
$mas3 = [];

foreach (range (0,9) as $val_d) {
    foreach (range (0, rand(2,20)) as $val_m) {
        $x = substr(str_shuffle(str_repeat("QWERTYUIOPASDFGHJKLZXCVBNM", 5)), 0, 1);
        $mas3[$val_d][$val_m] = $x; 
    }

}

_dc($mas3);

foreach (range(0,(count($mas3)-1)) as $val){
    natsort($mas3[$val]);
}

_dc($mas3);

// Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai
// kurių masyvai trumpiausi eitų pradžioje.

function rusiuot($a, $b){
    return (count($a) <=> count($b));
}
usort($mas3, "rusiuot");

_dc($mas3);