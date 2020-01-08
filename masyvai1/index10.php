<?php

// Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai
// nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma.
// Penktas trečio ir ketvirto suma ir t.t.

$randomArray[0] = rand (5, 25);
$randomArray[1] = rand (5, 25);

for ($i = 2; $i < 10; $i++) {
    $randomArray[$i] = $randomArray[$i-2] + $randomArray[$i-1];
}

_dc ($randomArray);