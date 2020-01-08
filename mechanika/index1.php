<?php

// Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su
// failo vardu, o kita nuoroda su failo vardu ir GET metodu perduodamu kintamuoju
// color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas
// nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl
// pasidarytų juodas.
?>

<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo !empty( $_GET) ?'red' :'black'; ?>">

<h2 style="color: white;">1 užduotis</h2>

<a href="http://localhost/10/home_works/mechanika/index1.php">1 linkas</a>
<br>
<a href="http://localhost/10/home_works/mechanika/index1.php?color=1">2 linkas</a>

</body>
</html>