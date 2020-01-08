<?php

// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite
// css stilių, kad kvadratas ekrane atrodytų kvadratinis.
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *
// * * * * * * * * * * *

$stars = '';

for ($i=1; $i<10001; $i++) {
    if ($i%100 == 0) {
        $stars = $stars.'*<br>';
    } else {
        $stars = $stars.'*';    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php namų darbai. 4 užduotis</title>
</head>
<body>
    <p style="width: 100%; font-size: 12px; line-height: 6px;"> <?php echo $stars ?> </p>
</body>
</html>