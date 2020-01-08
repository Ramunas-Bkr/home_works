<?php
session_start();


if (!empty($_POST)) {
    header('Location: http://localhost/10/home_works/mechanika/rose.php');
    die();
}

?>


<!DOCTYPE html>
<html> 
<body style="background-color: pink; ">

<h2 style="color: white;">8 užduotis</h2>

<form action="http://localhost/10/home_works/mechanika/rose.php" method="post">
<button type="submit" name="pink" value="1">GO TO ROSE</button>
</form>
</body>
</html>


