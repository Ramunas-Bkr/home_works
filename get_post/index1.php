<?php

// Sukurkite žemiau pateikiamą formą:
//     Suprogramuokite taip, kad duomenys būtų siunčiami į PHP programą ir
//     apskaičiuojama jų sudėtis.
//     Scriptas turi išvesti:
//     Atsiųstų skaičių (x) ir (y) suma lygi (rezultatas).

if (!empty($_GET['pirmas'] && !empty($_GET['antras']))) {
    $suma = $_GET['pirmas'] + $_GET['antras'];
    $pirmas =  $_GET['pirmas'];
    $antras =  $_GET['antras'];
    $isvesti = "Skaičių $pirmas ir $antras suma lygi $suma";
} else {
    $isvesti = '';
}


?>

<!DOCTYPE html>
<html>
<body>

<h2>Paskaičiuosiu sumą</h2>

<form action="">
 Pirmas skaičius:<br>
  <input type="text" name="pirmas" value="0">
  <br>
  Antras skaičius:<br>
  <input type="text" name="antras" value="0">
  <br><br>
  <input type="submit" value="Paskaičiuoti">
</form> 

<p>Paspaudus "Paskaičiuoti" išvesiu dviejų įvestų skaičių sumą.</p>

<p> <?php echo $isvesti; ?></p>

</body>
</html>