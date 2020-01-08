<?php

// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra
// masyvas [user_id => xxx, place_in_row => xxx] user_id
// atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis
// skaičius nuo 0 iki 100.

$mas5 = [];

foreach (range (0,29) as $val) {
    $user_id = rand(1,1000000);
    $place_in_row = rand(1,100);
    $temporary = ['user_id' => $user_id, 'place_in_row' => $place_in_row];
    $mas5[$val] = $temporary;
}

_dc($mas5);

// Išrūšiuokite 6 uždavinio masyvą pagal user_id didėjančia tvarka. Ir
// paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

function sortUser_id($a, $b){
    return ($a['user_id'] <=> $b['user_id']);
}
usort($mas5, "sortUser_id");

_dc($mas5);

function sortPlace_in_row($a, $b){
    return ($b['place_in_row'] <=> $a['place_in_row']);
}
usort($mas5, "sortPlace_in_row");

_dc($mas5);

// Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du
// elementus: name ir surname . Elementus užpildykite stringais iš
// atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

foreach(range(0,(count($mas5)-1)) as $val){
        $name = substr(str_shuffle(str_repeat("qwertyuiopasdfghjklzxcvbnm", 5)), 0, rand(5,15));
        $surname = substr(str_shuffle(str_repeat("qwertyuiopasdfghjklzxcvbnm", 5)), 0, rand(5,15));
        $mas5[$val]['name'] = $name;
        $mas5[$val]['surname'] = $surname;
}

_dc($mas5);