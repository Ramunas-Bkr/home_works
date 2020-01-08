<?php

// Naudokite funkcija rand() . Sugeneruokite 6 kintamuosius su
// atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes
// viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas
// tarpais. Naudoti ciklų ir masyvų NEGALIMA 


//Gauname 6 atsitiktinius skaicius:
$n1 = rand(1000,9999);
$n2 = rand(1000,9999);
$n3 = rand(1000,9999);
$n4 = rand(1000,9999);
$n5 = rand(1000,9999);
$n6 = rand(1000,9999);

echo "6 random kintamieji: $n1, $n2, $n3, $n4, $n5, $n6";
echo '<br>';

//Gauname didziausia ir maziausia skaiciu. Didziausi skaiciai bus(mazejimo tvarka): b1, b2, b3.
//Maziausi (didejimo tvarka): s1, s2, s3.

$b1 = max($n1, $n2, $n3, $n4, $n5, $n6);
$s1 = min($n1, $n2, $n3, $n4, $n5, $n6);
$b2 = 5;
$b3 = 4;
$s3 = 3;
$s2 = 2;

//Bandom gauti antra ir trecia didziausius skaicius:

if ($n1 == $b1) {
    $b2 = max($n2, $n3, $n4, $n5, $n6);
    if ($n2 == $b2) {
        $b3 = max ($n3, $n4, $n5, $n6);
    } elseif ($n3 == $b2) {
        $b3 = max ($n2, $n4, $n5, $n6);
    } elseif ($n4 == $b2) {
        $b3 = max ($n2, $n3, $n5, $n6);
    } elseif ($n5 == $b2) {
        $b3 = max ($n2, $n3, $n4, $n6);
    } else {
        $b3 = max ($n2, $n3, $n4, $n5);
    }
} elseif ($n2 == $b1) {
    $b2 = max($n1, $n3, $n4, $n5, $n6);
    if ($n1 == $b2) {
        $b3 = max ($n3, $n4, $n5, $n6);
    } elseif ($n3 == $b2) {
        $b3 = max ($n1, $n4, $n5, $n6);
    } elseif ($n4 == $b2) {
        $b3 = max ($n1, $n3, $n5, $n6);
    } elseif ($n5 == $b2) {
        $b3 = max ($n1, $n3, $n4, $n6);
    } else {
        $b3 = max ($n1, $n3, $n4, $n5);
    }
} elseif ($n3 == $b1) {
    $b2 = max($n1, $n2, $n4, $n5, $n6);
    if ($n1 == $b2) {
        $b3 = max ($n2, $n4, $n5, $n6);
    } elseif ($n2 == $b2) {
        $b3 = max ($n1, $n4, $n5, $n6);
    } elseif ($n4 == $b2) {
        $b3 = max ($n1, $n2, $n5, $n6);
    } elseif ($n5 == $b2) {
        $b3 = max ($n1, $n2, $n4, $n6);
    } else {
        $b3 = max ($n1, $n2, $n4, $n5);
    }
} elseif ($n4 == $b1) {
    $b2 = max($n1, $n2, $n3, $n5, $n6);
    if ($n1 == $b2) {
        $b3 = max ($n2, $n3, $n5, $n6);
    } elseif ($n2 == $b2) {
        $b3 = max ($n1, $n3, $n5, $n6);
    } elseif ($n3 == $b2) {
        $b3 = max ($n1, $n2, $n5, $n6);
    } elseif ($n5 == $b2) {
        $b3 = max ($n1, $n2, $n3, $n6);
    } else {
        $b3 = max ($n1, $n2, $n3, $n5);
    }
}  elseif ($n5 == $b1) {
    $b2 = max($n1, $n2, $n3, $n4, $n6);
    if ($n1 == $b2) {
        $b3 = max ($n2, $n3, $n4, $n6);
    } elseif ($n2 == $b2) {
        $b3 = max ($n1, $n3, $n4, $n6);
    } elseif ($n3 == $b2) {
        $b3 = max ($n1, $n2, $n4, $n6);
    } elseif ($n4 == $b2) {
        $b3 = max ($n1, $n2, $n3, $n6);
    } else {
        $b3 = max ($n1, $n2, $n3, $n4);
    }
} else {
    $b2 = max($n1, $n2, $n3, $n4, $n5);
    if ($n1 == $b2) {
        $b3 = max ($n2, $n3, $n4, $n5);
    } elseif ($n2 == $b2) {
        $b3 = max ($n1, $n3, $n4, $n5);
    } elseif ($n3 == $b2) {
        $b3 = max ($n1, $n2, $n4, $n5);
    } elseif ($n4 == $b2) {
        $b3 = max ($n1, $n2, $n3, $n5);
    } else {
        $b3 = max ($n1, $n2, $n3, $n4);
    }
}

//Ieskom dvieju maziausiu:

if ($n1 == $s1) {
    $s2 = min($n2, $n3, $n4, $n5, $n6);
    if ($n2 == $s2) {
        $s3 = min ($n3, $n4, $n5, $n6);
    } elseif ($n3 == $s2) {
        $s3 = min ($n2, $n4, $n5, $n6);
    } elseif ($n4 == $s2) {
        $s3 = min ($n2, $n3, $n5, $n6);
    } elseif ($n5 == $s2) {
        $s3 = min ($n2, $n3, $n4, $n6);
    } else {
        $s3 = min ($n2, $n3, $n4, $n5);
    }
} elseif ($n2 == $s1) {
    $s2 = min($n1, $n3, $n4, $n5, $n6);
    if ($n1 == $s2) {
        $s3 = min ($n3, $n4, $n5, $n6);
    } elseif ($n3 == $s2) {
        $s3 = min ($n1, $n4, $n5, $n6);
    } elseif ($n4 == $s2) {
        $s3 = min ($n1, $n3, $n5, $n6);
    } elseif ($n5 == $s2) {
        $s3 = min ($n1, $n3, $n4, $n6);
    } else {
        $s3 = min ($n1, $n3, $n4, $n5);
    }
} elseif ($n3 == $s1) {
    $s2 = min($n1, $n2, $n4, $n5, $n6);
    if ($n1 == $s2) {
        $s3 = min ($n2, $n4, $n5, $n6);
    } elseif ($n2 == $s2) {
        $s3 = min ($n1, $n4, $n5, $n6);
    } elseif ($n4 == $s2) {
        $s3 = min ($n1, $n2, $n5, $n6);
    } elseif ($n5 == $s2) {
        $s3 = min ($n1, $n2, $n4, $n6);
    } else {
        $s3 = min ($n1, $n2, $n4, $n5);
    }
} elseif ($n4 == $s1) {
    $s2 = min($n1, $n2, $n3, $n5, $n6);
    if ($n1 == $s2) {
        $s3 = min ($n2, $n3, $n5, $n6);
    } elseif ($n2 == $s2) {
        $s3 = min ($n1, $n3, $n5, $n6);
    } elseif ($n3 == $s2) {
        $s3 = min ($n1, $n2, $n5, $n6);
    } elseif ($n5 == $s2) {
        $s3 = min ($n1, $n2, $n3, $n6);
    } else {
        $s3 = min ($n1, $n2, $n3, $n5);
    }
}  elseif ($n5 == $s1) {
    $s2 = min($n1, $n2, $n3, $n4, $n6);
    if ($n1 == $s2) {
        $s3 = min ($n2, $n3, $n4, $n6);
    } elseif ($n2 == $s2) {
        $s3 = min ($n1, $n3, $n4, $n6);
    } elseif ($n3 == $s2) {
        $s3 = min ($n1, $n2, $n4, $n6);
    } elseif ($n4 == $s2) {
        $s3 = min ($n1, $n2, $n3, $n6);
    } else {
        $s3 = min ($n1, $n2, $n3, $n4);
    }
} else {
    $s2 = min($n1, $n2, $n3, $n4, $n5);
    if ($n1 == $s2) {
        $s3 = min ($n2, $n3, $n4, $n5);
    } elseif ($n2 == $s2) {
        $s3 = min ($n1, $n3, $n4, $n5);
    } elseif ($n3 == $s2) {
        $s3 = min ($n1, $n2, $n4, $n5);
    } elseif ($n4 == $s2) {
        $s3 = min ($n1, $n2, $n3, $n5);
    } else {
        $s3 = min ($n1, $n2, $n3, $n4);
    }
}



echo '<br>';
echo "6 random kintamieji isdelioti nuo didziausio iki maziausio: $b1, $b2, $b3, $s3, $s2, $s1";