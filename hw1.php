<?php

echo '----------------------------------------------------';
echo '<br>';
echo '1 užduotis';
echo '<br>';

// Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo
// metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal
// gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir
// pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

$name = 'Ramūnas';
$lastName = 'Bekeris';
$bornYear = 1935;
$thisYear = date('Y');
$age = $thisYear - $bornYear;

echo "Aš esu $name $lastName. Man yra $age metai";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '2 užduotis';
echo '<br>';

// Naudokite funkcija rand() . Sukurkite du kintamuosius ir naudodamiesi
// funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4.
// Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį
// suapvalinę iki 2 skaičių po kablelio.

$first = rand(0,4);
$second = rand(0,4);

if ($first > $second && $second != 0) {
    $answer = $first / $second;
}
elseif ($first > $second && $second == 0) {
    $answer = 'Klaida. Dalyba iš 0 negalima';
}
elseif ($first == 0 ){
    $answer = 'Klaida. Dalyba iš 0 negalima';
}
else {
    $answer = $second / $first;
}
$answer = (round($answer, 2));

echo $answer;

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '3 užduotis';
echo '<br>';

// Naudokite funkcija rand() . Sukurkite tris kintamuosius ir
// naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes
// nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

$pirmas = rand(0,25);
$antras = rand(0,25);
$trecias = rand(0,25);

if ($pirmas > $antras && $pirmas < $trecias) {
    echo "Iš kintamųjų $pirmas, $antras ir $trecias, vidurinis yra $pirmas";
}
elseif ($pirmas < $antras && $antras < $trecias) {
    echo "Iš kintamųjų $pirmas, $antras ir $trecias, vidurinis yra $antras";
}
elseif ($pirmas < $antras && $pirmas > $trecias) {
    echo "Iš kintamųjų $pirmas, $antras ir $trecias, vidurinis yra $pirmas";
}
elseif ($pirmas > $antras && $antras > $trecias) {
    echo "Iš kintamųjų $pirmas, $antras ir $trecias, vidurinis yra $antras";
}
else {
    echo "Iš kintamųjų $pirmas, $antras ir $trecias, vidurinis yra $trecias";
}

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '4 užduotis';
echo '<br>';

// Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite
// rand() funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų,
// ar galima sudaryti trikampį ir atsakymą atspausdintų.

$a = rand(1,10); //Ivedama trikampio krastine a
$b = rand(1,10); //Ivedama trikampio krastine b
$c = rand(1,10); //Ivedama trikampio krastine c

$posibleTriangle = 'ne'; //jei didziausia krastine bus mazesne uz kitu dvieju suma, trikampis gali egzistuoti

if ($a > $b && $a > $c ) {
    if ($a < $b + $c);
    $posibleTriangle = 'taip'; 
}
elseif ($b > $a && $b > $c) {
    if ($b < $a + $c)
        $posibleTriangle = 'taip';
}
else {
    if ($c < $a + $c)
    $posibleTriangle = 'taip';
}

echo "Ar esant trikampio krastinems $a, $b ir $c trikampis imanomas: $posibleTriangle";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '5 užduotis';
echo '<br>';
// Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų.
// (sprendimui masyvo nenaudoti).

$first = rand (0,2);
$second = rand (0,2);
$third = rand (0,2);
$fourth = rand (0,2);

$zero = 0;
$one = 0;
$two = 0;

if ($first === 0) {
    $zero++;
}
elseif ($first === 1) {
    $one ++;
}
else {
    $two++;
}

if ($second === 0) {
    $zero++;
}
elseif ($second === 1) {
    $one ++;
}
else {
    $two++;
}

if ($third === 0) {
    $zero++;
}
elseif ($third === 1) {
    $one ++;
}
else {
    $two++;
}

if ($fourth === 0) {
    $zero++;
}
elseif ($fourth === 1) {
    $one ++;
}
else {
    $two++;
}

echo "Kintamuosiuose $first, $second, $third ir $fourth yra: nuliu: $zero, vienetu: $one, dvejetu: $two";


echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '6 užduotis';
echo '<br>';
// Naudokite funkcija rand() . Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir
// jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

$hTag = rand(1,6);
echo "<h$hTag>$hTag</h$hTag>";


echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '7 užduotis';
echo '<br>';

// Naudokite funkcija rand() . Atspausdinkite 3 skaičius nuo -10 iki 10.
// Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.

$color = rand(-10, 10);
if ($color < 0) {
    echo '<h1 style="color: green;">'.$color.'</h1>';
}
elseif ($color > 0) {
    echo '<h1 style="color: blue;">'.$color.'</h1>';
}
else {
    echo '<h1 style="color: red;">'.$color.'</h1>';
}


echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '8 užduotis';
echo '<br>';

// Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR
// taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida.
// Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų
// atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite
// rand() funkcija nuo 5 iki 3000.

$candle = rand(5,3000);
$price = $candle;

if ($candle > 2000) {
    $price *= 0.96;
}
elseif ($candle > 1000) {
    $price *= 0.97;
}

echo "Parduota zvakiu $candle uz $price";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '9 užduotis';
echo '<br>';

// Naudokite funkcija rand() . Sukurkite tris kintamuosius su atsitiktinėm
// reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį
// vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės
// nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko
// skaičiaus.

$first = rand(0,100);
$second = rand(0,100);
$third = rand(0,100);

$quantity = 3;

$Summ = $first + $second + $third;

$fullAverage = $Summ / $quantity;
$fullAverage = (round($fullAverage, 0));

if ($first <10 || $first >90 ) {
    $quantity --;
    $Summ -= $first;
}
if ($second <10 || $second >90 ) {
    $quantity --;
    $Summ -= $second;
}
if ($third <10 || $third >90 ) {
    $quantity --;
    $Summ -= $third;
}

$sortedAverage = $Summ / $quantity;
$sortedAverage = (round($sortedAverage, 0));

echo "Skaiciu $first, $second ir $third vidurkis yra $fullAverage. Atemtus mazesnius uz 10 ir didesnius uz 90 skaicius vidurkis yra $sortedAverage";

echo '<br>';
echo '----------------------------------------------------';
echo '<br>';
echo '10 užduotis';
echo '<br>';

// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes.
// Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją
// rand() . Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės.
// Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį
// prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$hour = rand (0,24);
$minutes = rand (0,60);
$seconds = rand (0,60);

$add = rand (0,300);

$newMinutes = $minutes;
$newHour = $hour;
$newSeconds = $seconds;

if ($add < 60) {
   $newSeconds += $add;
        if ($newSeconds >= 60) {
            $newSeconds -= 60;
            $newMinutes ++;
                if ($newMinutes >= 60) {
                    $newMinutes -= 60;
                    $newHour ++;
                    if ($newHour == 24) {
                        $newHour = 0;
                    }
                        elseif ($newHour > 24) {
                            $newHour = 1;
                        }
                }
        }
}
elseif ($add == 60) {
    $newMinutes ++;
        if ($newMinutes >= 60) {
            $newMinutes -= 60;
            $newHour ++;
            if ($newHour == 24) {
                $newHour = 0;
            }
                elseif ($newHour > 24) {
                    $newHour = 1;
                }
        }
}
elseif ($add < 120) {
    $newSeconds += $add - 60;
    $newMinutes++;
        if ($newSeconds >= 60) {
            $newSeconds -= 60;
            $newMinutes ++;
                if ($newMinutes >= 60) {
                    $newMinutes -= 60;
                    $newHour ++;
                    if ($newHour == 24) {
                        $newHour = 0;
                    }
                        elseif ($newHour > 24) {
                            $newHour = 1;
                        }
                }
        }
}
elseif ($add == 120) {
    $newMinutes = $newMinutes + 2;
        if ($newMinutes >= 60) {
            $newMinutes -= 60;
            $newHour ++;
            if ($newHour == 24) {
                $newHour = 0;
            }
                elseif ($newHour > 24) {
                    $newHour = 1;
                }
        }
}
elseif ($add < 180) {
    $newSeconds += $add - 120;
    $newMinutes = $newMinutes + 2;
        if ($newSeconds >= 60) {
            $newSeconds -= 60;
            $newMinutes ++;
                if ($newMinutes >= 60) {
                    $newMinutes -= 60;
                    $newHour ++;
                    if ($newHour == 24) {
                        $newHour = 0;
                    }
                        elseif ($newHour > 24) {
                            $newHour = 1;
                        }
                }
        }
}
elseif ($add == 180) {
    $newMinutes = $newMinutes + 3;
        if ($newMinutes >= 60) {
            $newMinutes -= 60;
            $newHour ++;
            if ($newHour == 24) {
                $newHour = 0;
            }
                elseif ($newHour > 24) {
                    $newHour = 1;
                }
        }
}
elseif ($add < 240) {
    $newSeconds += $add - 180;
    $newMinutes = $newMinutes + 3;
        if ($newSeconds >= 60) {
            $newSeconds -= 60;
            $newMinutes ++;
                if ($newMinutes >= 60) {
                    $newMinutes -= 60;
                    $newHour ++;
                    if ($newHour == 24) {
                        $newHour = 0;
                    }
                        elseif ($newHour > 24) {
                            $newHour = 1;
                        }
                }
        }
}
elseif ($add == 240) {
    $newMinutes = $newMinutes + 4;
        if ($newMinutes >= 60) {
            $newMinutes -= 60;
            $newHour ++;
            if ($newHour == 24) {
                $newHour = 0;
            }
                elseif ($newHour > 24) {
                    $newHour = 1;
                }
        }
}
elseif ($add < 300) {
    $newSeconds += $add - 240;
    $newMinutes = $newMinutes + 4;
        if ($newSeconds >= 60) {
            $newSeconds -= 60;
            $newMinutes ++;
                if ($newMinutes >= 60) {
                    $newMinutes -= 60;
                    $newHour ++;
                    if ($newHour == 24) {
                        $newHour = 0;
                    }
                        elseif ($newHour > 24) {
                            $newHour = 1;
                        }
                }
        }
}
else {
    $newMinutes = $newMinutes + 5;
        if ($newMinutes >= 60) {
            $newMinutes -= 60;
            $newHour ++;
            if ($newHour == 24) {
                $newHour = 0;
            }
                elseif ($newHour > 24) {
                    $newHour = 1;
                }
        }
}

//Jei valanda, min, sec mazesne uz 10 priekyje pridedu 0, jei h-24 val., keiciu i 00:
if ($seconds < 10) {
    $seconds = '0' . $seconds;
}
if ($minutes < 10) {
    $minutes = '0' . $minutes;
}
if ($hour < 10) {
    $hour = '0' . $hour;
}
elseif ($hour == 24) {
    $hour = '00';
}
if ($newSeconds < 10) {
    $newSeconds = '0' . $newSeconds;
}
if ($newMinutes < 10) {
    $newMinutes = '0' . $newMinutes;
}
if ($newHour < 10) {
    $newHour = '0' . $newHour;
}
elseif ($newHour == 24) {
    $newHour = '00';
}


echo "Laikas pries pridejima: $hour:$minutes:$seconds";

echo '<br>';
echo "Reikia prideti $add sekundziu";
echo '<br>';

echo "Laikas pridejus: $newHour:$newMinutes:$newSeconds";