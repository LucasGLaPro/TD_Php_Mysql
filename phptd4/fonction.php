<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



function afficher_requet_select($query)
{
    try{

        $MaBase = new PDO('mysql:host=192.168.65.192; dbname=lucasphpex2; charset=utf8','lucas', 'lucas');

    $ObjetResultatDeRequeteBrut = $MaBase->query($query);
    while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch()){
        echo ($TableauDunTuple["numconsultation"]." ".$TableauDunTuple["nombre_med"]."<br>");
        
    };

        
    
    }catch(Exception $e){
    
        echo "J'ai eu un problème erreur :".$e->getMessage();
    }
}






function ajout($nom, $prenom)
{
    
try{
    $MaBase = new PDO('mysql:host=192.168.65.192; dbname=lucasphpex2; charset=utf8','lucas', 'lucas');
    $req	=	$MaBase->exec("INSERT	INTO	patient (nom, prenom)	VALUES	('$nom', '$prenom')");
    echo ("votre nom a ete ajouté". $nom. $prenom);



    $ObjetResultatDeRequeteBrut = $MaBase->query("SELECT * FROM `patient`");
    while($TableauDunTuple = $ObjetResultatDeRequeteBrut->fetch()){
        echo"<br>". $TableauDunTuple["prenom"]." ".$TableauDunTuple["nom"]."<br>";
    };


}

catch(Exception $e){
    
    echo "J'ai eu un problème erreur :".$e->getMessage();
}



}
?>
</body>
</html>