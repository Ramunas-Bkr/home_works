<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prisijungimas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="login-header">Tekstinių ir jpg failų menedžeris</h1>
<h3>Registracija</h3>
<h5 style="color:red;"><?= $klaida ?? '' ?></h5>
<form class="laukai" action="" method="post">
  <div class="ivedimo-laukas">
    <div class="name">Vardas</div>
    <input class="input" type="text" name="vardas">
    <div class="names">Slaptažodis:</div>
    <input class="input" type="password" name="slapt">
  </div>
  <input class="submit" type="submit" value="Jungtis">
</form>
</body>
</html>