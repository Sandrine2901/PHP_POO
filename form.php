<?php

echo Apropos::getVersion();

$myform = new form("form.class.php","Accès au site","post");
$myform->settext("nom","Votre nom :  ");
$myform->settext("prenom","Votre prenom :");
$myform->settext("code","Votre code : ");
$myform->setsubmit();
$myform ->setreset();
$myform->getform();


echo Apropos::getVersion();
$myclone = clone $myform;   // pour recréer le même formulaire en rajoutant ce que tu veux
$myclone->settext("truc","Votre truc : ");
$myclone->settext("email","Votre email :");
$myclone->settext("telephone","Votre télephone :");
$myclone->getform();

echo Apropos::getVersion();

$myform = new form2("form.class.php","Coordonnées et sports préférés","post");
$myform->settext("nom","Votre nom :  ");
$myform->settext("prenom","Votre prénom :");
$myform->settext("code","Votre code : ");
$myform->setradio("sexe"," Homme ","homme");
$myform->setradio("sexe"," Femme ","femme");
$myform->setcocher("loisir"," Tennis ","tennis");
$myform->setcocher("loisir"," Equitation ","équitaion");
$myform->setcocher("loisir"," Football ","football");
$myform->setsubmit();
$myform->setreset();
$myform->getform();
echo Apropos::getVersion();
$myclone = clone $myform;   // pour recréer le même formulaire en rajoutant ce que tu veux
$myclone->settext("truc","Votre truc : ");
$myclone->settext("email","Votre email :");
$myclone->settext("telephone","Votre télephone :");
$myclone->getform();




?>