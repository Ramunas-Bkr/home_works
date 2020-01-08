<?php

session_start();

// Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10)
// checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva
// pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta
// checkboksų (ne kurie, o kiek).

$letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$generateHTML = '';
$generateHTML2 = '';
$k = rand(2, 9);

for ($i=0; $i <= $k; $i++) {
    $generateHTML = $generateHTML.'<input type="hidden" name="vardas[]" value="0">
    <input type="checkbox" name="vardas[]" value="1">'.$letters[$i].'<br>';
}
$generateHTML = $generateHTML.'<input type="submit" value="Pakeisk ir paskaičiuok">';


if (!empty ($_POST)) {
    $spalva = 'black';
    $generateHTML = '';
    $pazymeta = 0;
    $nepazymeta = 0;
    foreach ($_POST['vardas'] as $value) {
        if ($value == 1) {
            $pazymeta++;
        } elseif ($value == 0) {
            $nepazymeta++;
        }
    }
    $generateHTML2 = '<p style="color: wheat"> Buvo pažymėta '.$pazymeta.' langelių(-iai) <p>
    <p style="color: wheat"> Buvo sugeneruota '.$k.' langelių(-iai) <p>';
    session_unset();
} else {
    $spalva = 'white';
    session_unset();
}

?>

<!DOCTYPE html>
<html> 
<body style="background-color: <?php echo $spalva;?>; ">

<form action="" method="POST">
  <?php echo $generateHTML ?><br>
  
  <?php echo $generateHTML2 ?>
</form> 
</body>
</html>
