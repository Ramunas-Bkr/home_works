<?php

// Naršyklėje nupieškite linija iš 400 “*”.
// a) Naudodami css stilių “suskaldykite” liniją taip, kad visos
// žvaigždutės matytųsi ekrane;
// b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje
// nebūtų daugiau nei 50 “*”;

$starsa = '';
$starsb = '';
$step = 49;

for ($i=0; $i<400; $i++) {
    $starsa = $starsa.'*';
}

for ($i=0; $i<400; $i++) {
    $starsb = $starsb.'*';
    if ($i == $step) {
        $starsb = $starsb.'<br>';
        $step +=50;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php namų darbai. 1 užduotis</title>
</head>
<body>
    <p style="width: 100%; word-break: break-all"> <?php echo $starsa ?> </p>
    <p> <?php echo $starsb ?> </p>
</body>
</html>

