<?php

// Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos
// argumentas dalijasi be liekanos (išskyrus vienetą ir patį save)
// Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;


function PrimaryNumbers ($number) {
    global $x;
    $x = 0;
    for ($i = 2; $i < $number; $i++) {
        if ($number%$i == 0) {
            $x++;
        }
    }
    // echo "Skaiciaus $number be liekanos dalyjasi is: ";
return $x;
}

$suma = PrimaryNumbers((int) rand(2,98));

// echo "$suma sveiku skaiciu";


// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
// skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį
// mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

$mas5 = [];

foreach (range(0, 99) as $val) {
    $mas5[$val] = rand(33, 77);
}

_dc($mas5);

usort($mas5, function($item1, $item2){
    return PrimaryNumbers($item1) <=> PrimaryNumbers($item2);
});
_dc($mas5);



// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai
// skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo
// ištrinkite pirminius skaičius.

$mas6 = [];

foreach (range(0, 99) as $val) {
    $mas6[$val] = rand(333, 777);
}

foreach ($mas6 as $key => &$val) {
    if (PrimaryNumbers($val) == 0) {
        unset($mas6[$key]);
    }
}

_dc($mas6);