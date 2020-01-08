<?php

// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra
// įterpiamas į h1 tagą;

function GenerateHTML ($place) {
    echo "<h1>$place</h1>";
}

GenerateHTML('Tekstas, kuris yra įterpiamas į h1 tagą');

// Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
// įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją
// panaudokite pirmame uždavinyje parašytą funkciją;

function GenerateHTML2 ($place, $tag, $place2) {
    echo "<h$tag>$place$tag$place2</h$tag>";
}


GenerateHTML2('Tekstas, kuris yra įterpiamas į h', rand(1,6), ' tagą');