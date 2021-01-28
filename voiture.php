<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php require_once ("voiture.class.php");



$Renault = new Voiture ("VB819YZ","Bleu",750,6,30.00,4);
        echo $Renault->toHTML();

        

 $Renault ->setNiveauEssence(20.00);
 
 
 $Renault ->setMessage("salut");
 

 $Renault->setAssure(true);

 

// $Renault ->repeindre("aubergine"); va avec echo pour fonction repeindre

if ($Renault ->repeindre("saumon")){ // on l'utilise avec return false et return true

    echo $Renault ->toHTML();
    echo "merci pour la peinture </br>";
}
else{
    echo $Renault ->toHTML();

    echo "erreur peinture identique";
}   


 echo "nouveau niveau d'essence :". $Renault->Mettre_essence(23); // si je echo là çà m'affiche mon nouveau niveau essence



echo $Renault ->sedeplacer(150,20);



var_dump($Renault);


echo $Renault;



$Renault = sprintf("l'immatriculation est :".$Renault->getImmat());

echo $Renault;
?>


</body>
</html>