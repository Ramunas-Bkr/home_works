<?php

// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()) .
// Visus skaitmenis stringe įdėkite į h1 tagą. Jegu iš eilės eina keli
// skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir
// užsidaro po paskutinio) Keitimui naudokite pirmo uždavinio funkciją;

function Md5Time ($m) {
    echo '<h1 style = "display: inline-block">'.$m[0].'</h1>';
}

Md5Time(md5(time()));


echo preg_replace_callback('/[0-9]+/', function($m){
    return '<h1 style = "display: inline-block">'.$m[0].'</h1>';
}, md5(time()) );
