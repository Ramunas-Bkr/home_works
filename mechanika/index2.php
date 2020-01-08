<?php

// Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su
// failo vardu, o kita nuoroda su failo vardu ir GET metodu perduodamu kintamuoju
// color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas
// nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl
// pasidarytų juodas.

if (!empty ($_GET)) {
    $spalva = '#'.$_GET['color'];
} else {
    $spalva = 'black';
}
?>

<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo $spalva;?>; ">

<h2 style="color: white;">2 užduotis</h2>

<a href="http://localhost/10/home_works/mechanika/index2.php">1 linkas</a>
<br>
<a href="http://localhost/10/home_works/mechanika/index2.php?color=abf745">2 linkas</a>

</body>
</html>