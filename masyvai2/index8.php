<?php

// Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal
// taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą.
// Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes
// užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte
// reikšmę nuo 0 iki į0 įrašykite tiesiogiai.

$mas8 = [];
foreach(range(0,9) as $val){
    $masLine = rand(0,5);
    if($masLine > 0){
        foreach(range(0,$masLine) as $val1){
            $mas8[$val][$val1] = rand(0,10);
        }
    }else{
        $mas8[$val] = $masLine;
    }
} 

_dc($mas8);

// Sukurkite Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir
// išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo
// reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

function mas8Sorted ($a, $b){
    $bigger = is_array($a) ? array_sum($a) : $a;
    $smaller = is_array($b) ? array_sum($b) : $b;
    return ($bigger <=> $smaller);
}
usort($mas8, "mas8Sorted");

_dc($mas8);
