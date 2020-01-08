<?php

// Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija,
// kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į
// ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas.
// Suprogramuokite keturis skirtingus scenarijus kai monetos metimą
// stabdome:
// a) Iškritus herbui;
// b) Tris kartus iškritus herbui;
// c) Tris kartus iš eilės iškritus herbui;
$H = 0;
$x = 0;

$herbas = '';
$skaicius = '';

for ($i=0; $i<INF; $i++) {
 $coin = rand(0,1);
 if ($coin == 0) {
     $x++;
     $skaicius = $skaicius.$x.' metimu iškrito S ';
 } else {
      $x++;
      $H++;
      $herbas = $herbas.$x.' metimu iškrito H ';
 }
 if ($H == 1) {
 break;
 }
}

echo 'a.) užduotis - sustabdoma 1 kartą iškritus herbui (H):';
echo '<br>';
echo "$skaicius <br> $herbas";
echo '<br><br><br>';

$H = 0;
$x = 0;

$herbas = '';
$skaicius = '';

for ($i=0; $i<INF; $i++) {
 $coin = rand(0,1);
 if ($coin == 0) {
     $x++;
     $skaicius = $skaicius.$x.' metimu iškrito S ';
 } else {
      $x++;
      $H++;
      $herbas = $herbas.$x.' metimu iškrito H ';
 }
 if ($H == 3) {
 break;
 }
}

echo 'b.) užduotis - sustabdoma 3 kartus iškritus herbui (H):';
echo '<br>';
echo "$skaicius <br> $herbas";
echo '<br><br><br>';

$H = 0;
$x = 0;

$herbas = '';
$skaicius = '';

for ($i=0; $i<INF; $i++) {
 $coin = rand(0,1);
 if ($coin == 0) {
     $x++;
     $H = 0;
     $skaicius = $skaicius.$x.' metimu iškrito S ';
 } else {
      $x++;
      $H++;
      $herbas = $herbas.$x.' metimu iškrito H ';
 }
 if ($H == 3) {
 break;
 }
}

echo 'c.) užduotis - sustabdoma 3 kartus iš eilės iškritus herbui (H):';
echo '<br>';
echo "$skaicius <br> $herbas";
echo '<br><br><br>';

