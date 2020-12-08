<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="php.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "fonctionmenu.php";
include "fonction.php";
menu()
?>
<form action="" method="post">
Votre nom:<input type="text" name="requete" />
Votre prenom:<input type="text" name="prenom" />
<input type="submit" value="Valider" />
</form>
<?php

    if(isset($_POST["requete"])) {
ajout($_POST['requete'], $_POST['prenom']);
    }
    else{
        echo("");
    }



    highlight_file((__FILE__))
?>
</body>
</html>