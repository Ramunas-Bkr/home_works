<?php

// Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai
// nuo 1 iki 33. Jeigu tarp tirjų paskutinių elementų yra nors vienas ne
// pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį
// skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia
// pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti
// elemento.

function divideWithoutRemainder($num) {
    $count = 0;
    if (is_int($num)) {
        for ($i=2; $i < $num-1; $i++) { 
            if ($num % $i == 0) {
                $count++;
            }
        }
        return $count;
    } else {
        echo 'Number is not int';
    }
}

$arr_task9 = [];
foreach (range(1,3) as $value) {
    $arr_task9[$value] = mt_rand(1, 33);
}

function checkPrimeNum($arr) {
    $count = 0;
    for ($i=count($arr)-2; $i < count($arr); $i++) { 
        if (divideWithoutRemainder($arr[$i]) != 0) {
            $count++;
        }
    }
    if ($count != 0) {
        $arr[] = mt_rand(1, 33);
        checkPrimeNum($arr);    
    } else {
        _dc($arr);
    }
}

checkPrimeNum($arr_task9);