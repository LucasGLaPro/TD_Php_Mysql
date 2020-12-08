<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo6</title>
</head>
<body>
<?php
include "../phptd4/fonctionmenu.php";
menu();
?>
<form action="" method="get">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>
<?php
if(isset($_GET["prenom"])){
       echo"<div class='style1'> ton nom est :".$_GET["prenom"]; echo"</div>";
}
highlight_file((__FILE__))
?>

</form>
</body>
</html>