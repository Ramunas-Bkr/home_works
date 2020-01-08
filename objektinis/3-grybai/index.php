<?php

// Sukurti klasę Grybas . Sukurti klasę Krepsys . Grybas turi tris privačias savybes:
// valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi būti
// atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba
// false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus,
// jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, kol bus pririnkta 500
// svorio nesukirmijusių ir valgomų grybų.

require 'Grybas.php';
require 'Krepsys.php';


$pririnkta = new Krepsys;

// $grybai = 0;

do{
    $pririnkta -> grybauju (Grybas::create());
    

} while ($pririnkta -> getSvoris() < 500);


echo 'Pririnkta va tiek grybu: '.$kiekis -> getKiekis().'<br>';
echo 'O ju va toks va svoris: '.$pririnkta -> getSvoris().'<br>';