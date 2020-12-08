<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo7</title>
</head>
<body>
<?php
include "../phptd4/fonctionmenu.php";
menu();
?>
<form action="" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" name="Valider" />
</p>
<?php

    if(isset($_POST["Valider"])){
    $_SESSION["prenom"] = $_POST["prenom"];
    }
    if(isset($_SESSION["prenom"])) {
    echo"<div class='style1'> ton nom est :".$_SESSION["prenom"]."</div>";
    } 
    else
        echo"ya rien";          
        highlight_file((__FILE__))
?>

</form>
</body>
</html>
            