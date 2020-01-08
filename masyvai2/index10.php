<?php

// Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
// Antro lygio masyvų reikšmės masyvai su dviem elementais value ir
// color . Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@%,
// o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX.
// Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo
// reikšmės nuspalvintos spalva color.

$mozaika = [];

foreach (range(0,9) as $line) {
    foreach (range (0,9) as $column){
        $form = substr(str_shuffle(str_repeat("#%+*@%", 6)), 0, 1);
        $color = substr(str_shuffle(str_repeat("0123456789abcdef", 16)), 0, 6);
        $element = ['form' => $form, 'color' => '#'.$color];
        $mozaika[$line][$column] = $element;
    } 
}

_dc ($mozaika);
$x = 0;
foreach(range(0,9) as $line){
    foreach(range(0,9) as $column){
        $x++;
        if ($x%10 == 0) {
        echo '<div style = "width: 100%; display: inline-block; text-align: center; color: white;
        font-size: 16px; font-weight: 600; line-height: 20px; width: 30px; height: 30px; background-color:'
        .$mozaika[$line][$column]['color'].'">'.$mozaika[$line][$column]['form'].'</div><br>';
        } else {
            echo '<div style = "width: 100%; display: inline-block; text-align: center; color: white;
            font-size:16px; font-weight: 600; line-height: 20px; width: 30px; height: 30px; background-color:'
            .$mozaika[$line][$column]['color'].'">'.$mozaika[$line][$column]['form'].'</div>';
            }
}}

echo '<br><br><br>';


