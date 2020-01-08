<?php
// Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skairtingas formas- vieną
// GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik
// tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET
// formos ir geltonai- kai iš POST.

if (!empty ($_POST)) {
    $spalva = 'yellow';
} elseif(!empty ($_GET)) {
    $spalva = 'green';
} else {
    $spalva = 'black';
}

?>

<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo $spalva;?>; ">

<h2 style="color: white;">6 užduotis</h2>
<form action="" method="get">
<button type="submit" name="button" value="1">GET</button>
</form>
<br>
<form action="" method="post">
<button type="submit" method="post" name="button" value="2">POST</button>
</form>
</body>
</html>