<?php

// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.

$stars = '';
$x = 0;

for ($i=1; $i<10001; $i++) {
if ($x%101 == 0) {
    $stars = $stars.'<span style="color: red;">*</span>';
} else {
    $stars = $stars.'<span>*</span>';
} $x++;
    if ($i%100 == 0) {
        $stars = $stars.'<br>';
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php namų darbai. 5 užduotis</title>
</head>
<body>
    <p style="width: 100%; font-size: 12px; line-height: 6px;"> <?php echo $stars ?> </p>
</body>
</html>

