<?php

// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos
// atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.
// Skaičiai didesni nei 275 turi būti raudonos spalvos.

$numbers = '';
$more150 = 0;

for ($i=0; $i<300; $i++) {
    $temporary = rand(0,300);
    if ($temporary > 150) {
        $more150 ++;
    }
    if ($temporary > 275) {
        $numbers = $numbers.' <span style="color: red;">'.$temporary.'</span>';
    }
    else $numbers = $numbers.' '.$temporary;

}

echo $numbers;
echo '<br><br>';
echo "Skaičių mažesnių nei 150 yra $more150";