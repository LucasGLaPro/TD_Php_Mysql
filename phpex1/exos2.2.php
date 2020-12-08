<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2.2</title>
</head>
<body>
    <?php
    include "../phptd4/fonctionmenu.php";
    menu();
    $NOM; $AGE; $PRENOM;
        $table['NOM'] = 'Ghyselen';
        $table['PRENOM'] = 'Lucas';
        $table['AGE'] = '18';
        echo "Votre nom est".$table['NOM'];
        echo "<br>Votre nom est".$table['PRENOM'];
        echo "<br>Votre nom est".$table['AGE'];
        highlight_file((__FILE__))
    ?>
</body>
</html>