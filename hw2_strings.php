<?php

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '1 užduotis';
echo '<br><br>';
// 1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

$actorName = 'Bill';
$actorLastname = 'Murray';

if (strlen($actorName) > strlen($actorLastname)) {
    echo $actorLastname;
} elseif (strlen($actorName) < strlen($actorLastname)) {
    echo $actorName;
}else {
    echo "$actorName $actorLastname";
}

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '2 užduotis';
echo '<br><br>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$actorName = 'Bill';
$actorLastname = 'Murray';

echo strtoupper($actorName). ' ' . strtolower($actorLastname);

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '3 užduotis';
echo '<br><br>';
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir
// pavardės kintamųjų raidžių. Jį atspausdinti.

$actorName = 'Bill';
$actorLastname = 'Murray';

$actor = $actorName{0}.$actorLastname{0};

echo $actor;

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '4 užduotis';
echo '<br><br>';
// 4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip
// stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir
// pavardės kintamųjų raidžių. Jį atspausdinti.

$actorName = 'Bill';
$actorLastname = 'Murray';
$lengthName = strlen($actorName);
$lengtLastname = strlen($actorLastname);

$actor = $actorName{$lengthName-3}.$actorName{$lengthName-2}.$actorName{$lengthName-1}.' '.$actorLastname{$lengtLastname-3}.$actorLastname{$lengtLastname-2}.$actorLastname{$lengtLastname-1};

echo $actor;

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '5 užduotis';
echo '<br><br>';
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir
// mažąsias) pakeisti žvaigždutėm “*”. Rezultatą atspausdinti.

$movie = 'An American in Paris';
$removable = array("a", "A");

echo str_replace($removable, "*", $movie);

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '6 užduotis';
echo '<br><br>';
// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir
// mažąsias) raides. Rezultatą atspausdinti.

$movie = 'An American in Paris';
$i = 0;
$bigA = 0;
$smalla = 0;

do {
    if ($movie{$i} == "A") {
        $bigA ++;
    } elseif ($movie{$i} == "a") {
        $smalla ++;
    } $i++;
} while ($i < strlen($movie));

echo "Kintamajame $movie yra $bigA A didziosios ir $smalla a mazosios raides.";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '7 užduotis';
echo '<br><br>';
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą
// atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space
// Odyssey” ir “It's a Wonderful Life”.

$movie1 = 'An American in Paris';
$removable = array("a", "A", "e", "E", "u", "U", "o", "O");
$movie2 = "Breakfast at Tiffany's";
$movie3 = '2001: A Space Odyssey';
$movie4 = "It's a Wonderful Life";

$movie1without = str_replace($removable, "", $movie1);
$movie2without = str_replace($removable, "", $movie2);
$movie3without = str_replace($removable, "", $movie3);
$movie4without = str_replace($removable, "", $movie4);

echo $movie1without;
echo '<br>';
echo $movie2without;
echo '<br>';
echo $movie3without;
echo '<br>';
echo $movie4without;
echo '<br>';

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '8 užduotis';
echo '<br><br>';
// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode ' . str_repeat ( ' ' ,
// rand ( 0 , 5 )) . rand ( 1 , 9 ) . ' - A New Hope' ; Surasti ir atspausdinti epizodo
// numerį.

$movie = 'Star Wars: Episode ' . str_repeat ( ' ' , rand (0 , 5)) . rand (1 , 9) . ' - A New Hope';
$episode = (int) filter_var($movie, FILTER_SANITIZE_NUMBER_INT);

echo $movie;
echo '<br>';
echo "Epizodas iš stringo $episode";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '9 užduotis';
echo '<br><br>';
// Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice
// in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu
// “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.

$english = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$lithuanian = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$resultEN = 0;
$resultLT = 0;
$array = explode (' ', $english);
foreach($array as $key => $val){
    if(mb_strlen ($val) <= 5)
        $resultEN++;
}
$array = explode (' ', $lithuanian);
foreach($array as $key => $val){
    if(mb_strlen ($val) <= 5)
        $resultLT++;
}

echo "Angliskame pavadinime yra $resultEN zodziai trumpesni ar lygus nei 5";
echo '<br>';
echo "Lietuviskame pavadinime yra $resultLT zodziai trumpesni ar lygus nei 5";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '10 užduotis';
echo '<br><br>';
// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis
// 3 simboliai.

$letters = "abcdefghijklmnopqrstuvwxyz";

for ($i=0; $i<3; $i++) {
echo $letters{rand(0,25)};
}

