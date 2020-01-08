<?php

// <!-- Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir
// metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į
// piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai,
// jeigu didesnis nei 2 prie popieriniaiPinigai. Parašykite metodą
// skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir
// metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. -->

require 'Pinigine.php';

$manoPinigine = new Pinigine;
$manoPinigine -> ideti(rand(1,10));
$manoPinigine -> ideti(rand(1,50));
$manoPinigine -> ideti(rand(1,100));
$manoPinigine -> ideti(rand(1,2));
$manoPinigine -> ideti(rand(1,2));
$manoPinigine -> ideti(rand(1,5));
$manoPinigine -> ideti(rand(1,2));
$manoPinigine -> ideti(rand(1,100));
$manoPinigine -> ideti(rand(1,100));
$manoPinigine  -> skaiciuoti();
