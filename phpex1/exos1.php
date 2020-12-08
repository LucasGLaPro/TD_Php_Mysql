<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>
<body>
<?php
include "../phptd4/fonctionmenu.php";
menu();
$NombreAleatoire = rand ( 0 , 100 );
echo "le nombre est ".$NombreAleatoire;
if($NombreAleatoire%2 == 1)
{
    echo"<div class=style1> ce nombre est impair <div>";
}
else
{
    echo"<div class=style2> ce nombre est pair <div>";
}

highlight_file((__FILE__))
?>
</body>
</html>