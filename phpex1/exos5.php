<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exox5</title>
</head>
<body>
<?php
include "../phptd4/fonctionmenu.php";
menu();
?>
<form action="" method="post">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
<?php

if(isset($_POST["prenom"])){
    echo"<div class='style2'> ton nom est :".$_POST['prenom'];} echo"</div>";
    highlight_file((__FILE__))
?>

</form>
</body>
</html>