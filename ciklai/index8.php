<?php

// Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą
// ( https://lt.wikipedia.org/wiki/Rombas ), kurio aukštis 21 eilutė. Reikia
// padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos
// (perkrovus puslapį spalvos turi keistis).

$starsPlace = 1;
$generateHTML = '';

for ($emptyPlace = 10; $emptyPlace > 0; $emptyPlace--) {
    $empty = str_repeat ('<span style= "font-size: 25px; line-height: 25px; padding-right: 2px; color: white;">*</span>', $emptyPlace);
    $stars = ''; 
    for ($i = 0; $i < $starsPlace; $i++) {
         $stars = $stars.'<span style= "font-size: 25px; line-height: 25px; padding-right: 2px; color:
         rgb('. rand(0,255) .', '. rand(0,255) .', '. rand(0,255) .');">*</span>';
     }
    $generateHTML = $generateHTML.$empty.$stars.'<br>';
    $starsPlace = $starsPlace + 2;
}
$generateHTML2 = '';
$stars = '';
for ($i = 0; $i < 21; $i++) {
    $stars = $stars.'<span style= "font-size: 25px; line-height: 25px; padding-right: 2px; color:
         rgb('. rand(0,255) .', '. rand(0,255) .', '. rand(0,255) .');">*</span>';
}
$generateHTML2 = $stars.'<br>';

$starsPlace = 19;
$generateHTML3 = '';

for ($emptyPlace = 1; $emptyPlace < 11; $emptyPlace++) {
    $empty = str_repeat ('<span style= "font-size: 25px; line-height: 25px; padding-right: 2px; color: white;">*</span>', $emptyPlace);
    $stars = ''; 
    for ($i = 0; $i < $starsPlace; $i++) {
         $stars = $stars.'<span style= "font-size: 25px; line-height: 25px; padding-right: 2px; color:
         rgb('. rand(0,255) .', '. rand(0,255) .', '. rand(0,255) .');">*</span>';
     }
    $generateHTML3 = $generateHTML3.$empty.$stars.'<br>';
    $starsPlace = $starsPlace - 2;
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php namų darbai. 8 užduotis</title>
</head>
<body>
    <p> <?php echo $generateHTML.$generateHTML2.$generateHTML3 ?></p>
</body>
</html>

