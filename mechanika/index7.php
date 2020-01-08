<?php
// Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų
// tuo pačiu adresu (t.y. į patį save) jau GET metodu.

session_start();

if (!empty($_POST)) {
    $_SESSION['color'] = 'yellow';
    header('Location: http://localhost/10/home_works/mechanika/index7.php?z=1');
    die();
} else {
if (isset($_SESSION['color']) && $_SESSION['color'] == 'yellow'){
    $spalva = 'yellow';
    session_unset();
} else {
    $spalva = 'green';
}
} 

?>

<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo $spalva;?>; ">

<h2 style="color: white;">7 užduotis</h2>
<form action="" method="get">
<button type="submit" name="button" value="1">GET</button>
</form>
<br>
<form action="" method="post">
<button type="submit" method="post" name="button" value="2">POST</button>
</form>
</body>
</html>