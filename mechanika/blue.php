<!DOCTYPE html>
<html> 
<body style="background-color: blue; ">

<h2>5 užduotis</h2>

<a href="http://localhost/10/home_works/mechanika/blue.php?getred=1">Linkas</a>

</body>
</html>

<?php
    if(!empty ($_GET)) {
        header('Location:http://localhost/10/home_works/mechanika/red.php');
}