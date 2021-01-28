<?php

require_once("personne.class.php");



$p1 = new Personne();
$p1->nom = "Jean";
$p1->email = "Jean@ailleurs.net";

    var_dump($p1);

    echo $p1->afficher();

$p2 = new Personne();


    var_dump($p2);

    echo $p2->afficher();




$p2 = new Employe($p1, 'numero de badge inconnu');

// pour faire apparaître les coordonnées 

$p2->nom = $p1->nom;
$p2->email = $p1->email;

echo "<pre>";

echo "</pre>";

echo $p1->afficher();

echo "<pre>";
var_dump($p2);
echo "</pre>";

echo $p2->afficher();


?>