<?php
// Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku
// GET metodu formoje.

if (!empty ($_GET)) {
    $spalva = '#'.$_GET['color'];
} else {
    $spalva = 'black';
}

?>



<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo $spalva;?>; ">

<h2 style="color: white;">3 užduotis</h2>

<a href="http://localhost/10/home_works/mechanika/index3.php">Juodas linkas</a>
<br>
<form action="">
  <p style="color: white;">Įveskite šešioliktainę spalvą (skaičiai 0-9 arba raidės: a-f):</p>
  <input type="text" name="color" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>