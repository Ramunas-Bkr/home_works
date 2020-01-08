<?php

// Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų
// žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai
// neturi kartotis. (reikės masyvo)

$english = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$lithuanian = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$together = $english .' '. $lithuanian;
$lenght = strlen($together);

$arrayTogether = explode (' ', $together);
shuffle ($arrayTogether);
$newString = '';

for ($i=0; $i<10; $i++) {
    $newString = $newString.$arrayTogether{$i}.' ';
    }

_dc ($newString);

    