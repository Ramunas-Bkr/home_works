<?php
if (!empty($pirmas)) {
    _dc ($pirmas);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ar pažysti gyvūnus?</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Apklausa</h1>
    <p class="answer"> Jūs teisingai atsakėte į 4 klausimus iš 4 ir surinkote 100%</p>
    <div class="one-block">
        <img class="photo" src="./img/deer.jpg" alt="pirmas">
        <div class="questions">
            <p>Koks tai gyvūnas?</p>
            <input type="radio" name="pirmas" value="elnias">Elnias<br>
            <?php if (isset($pirmas) && $pirmas=="elnias") $pirmas = 'teisingai'; ?>
            <input type="radio" name="pirmas" value="Suo">Šuo<br>
            <input type="radio" name="pirmas" value="Katinas">Katinas<br>
            <input type="radio" name="pirmas" value="Begemotas">Begemotas<br>
            <div class="teisingai">Jūs atsakėte teisingai</div>
        </div>
        
    </div>
    <div class="one-block">
            <img class="photo" src="./img/dog.jpg" alt="pirmas">
            <div class="questions">
                <p>Koks tai gyvūnas?</p>
                <input type="radio" name="elnias" value="Elnias">Elnias<br>
                <input type="radio" name="suo" value="Suo">Šuo<br>
                <input type="radio" name="katinas" value="Katinas">Katinas<br>
                <input type="radio" name="begemotas" value="Begemotas">Begemotas<br>
                <div class="blogai">Jūs atsakėte neteisingai</div>
            </div>
            
        </div>
        <div class="one-block">
                <img class="photo" src="./img/cat.jpg" alt="pirmas">
                <div class="questions">
                    <p>Koks tai gyvūnas?</p>
                    <input type="radio" name="elnias" value="Elnias">Elnias<br>
                    <input type="radio" name="suo" value="Suo">Šuo<br>
                    <input type="radio" name="katinas" value="Katinas">Katinas<br>
                    <input type="radio" name="begemotas" value="Begemotas">Begemotas<br>
                </div>
            </div>
            <div class="one-block">
                    <img class="photo" src="./img/Begemotas.jpg" alt="pirmas">
                    <div class="questions">
                        <p>Koks tai gyvūnas?</p>
                        <input type="radio" name="elnias" value="Elnias">Elnias<br>
                        <input type="radio" name="suo" value="Suo">Šuo<br>
                        <input type="radio" name="katinas" value="Katinas">Katinas<br>
                        <input type="radio" name="begemotas" value="Begemotas">Begemotas<br>
                    </div>
                </div>
    <input class="patikrinti" type="submit" value="Patikrinti">
</body>
</html>