<?php
    include "../phptd4/fonctionmenu.php";
    menu();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1 align="center">Exercice 2</h1>
    <?php
    include 'fonctions.php';
    tab2("lucas", "Greg", "Julien");
    highlight_file((__FILE__))
    ?>
</body>
</html>