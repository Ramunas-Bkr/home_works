<?php

// Panaudokite funkciją microtime() . Paskaičiuokite kiek sekundžių
// užtruks kodą:
// $c = " 10 bezdzioniu suvalge 20 bananu." ;
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą:
// $c = '10 bezdzioniu suvalge 20 bananu.' ;

$viengubuTimeStart = microtime(true);

for ($i=0; $i<1000000; $i++) {
    $c = '10 bezdzioniu suvalge 20 bananu.';
}

$viengubuTimeEnd = microtime(true);

$viengubuTime = $viengubuTimeEnd - $viengubuTimeStart;

$dvigubuTimeStart = microtime(true);

for ($i=0; $i<1000000; $i++) {
    $c = "10 bezdzioniu suvalge 20 bananu.";
}

$dvigubuTimeEnd = microtime(true);

$dvigubuTime = $dvigubuTimeEnd - $dvigubuTimeStart;

echo 'Kodas su viengubomis kabutemis milijona kartu ivykdytas per '.$viengubuTime.'s, su dvigubimis kabutemis per '.$dvigubuTime.'s.';