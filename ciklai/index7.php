<?php

// Kazys ir Petras žaidžiai šaškėm. Petras surenka taškų kiekį nuo 10 iki 20,
// Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų
// vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas ”. Taškų kiekį
// generuokite funkcija rand() . Žaidimą laimi tas, kas greičiau surenka
// 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222
// arba daugiau taškų.

$KazysPoints = 0;
$PetrasPoints = 0;

do {
$KazysAddPoints = rand(5,25);
$PetrasAddPoints = rand(10,20);

$KazysPoints += $KazysAddPoints;
if ($KazysPoints >= 222) {
break;
}
$PetrasPoints += $PetrasAddPoints;

} while ($PetrasPoints <= 222);

echo "Kazys surinko $KazysPoints tšk., Petras surinko $PetrasPoints tšk.";
echo '<br>';
if ($KazysPoints > $PetrasPoints) {
    echo 'Partiją laimėjo: Kazys';
} else {
    echo 'Partiją laimėjo: Petras';
}

