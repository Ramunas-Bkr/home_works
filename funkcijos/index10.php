<?php

// Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų,
// kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio masyvo pirminių
// skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių
// (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo
// pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.

$mas10 = [];

foreach (range (0,9) as $val_d) {
    foreach (range (0, 9) as $val_m) {
        $x = rand (1,100);
        $mas10[$val_d][$val_m] = $x; 
    }
}

_dc($mas10);

function checkPrimary() {
    global $mas10;
    foreach($mas10 as $val1){
        foreach($val1 as $key => $val2){ 
            $suma = 0;
            $x = 0;
            for ($i = 2; $i < $val2; $i++) {
            if ($val2%$i == 0) {
                $suma = $suma + $val2;
                $x++;
            }
            if ($x != 0) {
            $maziau70 = $suma / $x;
            }
        }
        if ($maziau70 < 70) {
        $maziausias = min($mas10);
        foreach($mas10 as $val1){
            foreach($val1 as $key => $val2) {
                if ($val2 == $maziausias) {
                    $mas10[$val1][$val2] = $val2 + 3;
                    checkPrimary();
                   }
                }
            }
        }
}
}}

checkPrimary($mas10);

_dc($mas10);