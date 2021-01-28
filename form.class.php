<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Formulaire à partir de classes</title>
</head>
<body>
<h1>Création de formulaires par Classe</h1>


<?php
include('form.php');
?>

<?php
  
   class form
   {
   protected $html;  // variable qui inclue tout le texte 
   protected $entête; // début formulaire correspond à form et à field
   protected $inputtext;
   protected $btnsubmit;  //bouton envoyer
   protected $btnreset;    // bouton annuler 


   public function __construct($action,$titre,$methode="post")
   {
   $this->entete="<form action=\"$action\" method=\"$methode\">";
   $this->entete.="<fieldset><legend><b>$titre</b></legend>";
   //$this->action = $action;
   //$this->methode=$methode;
   }
   
   public function settext($name,$libelle)
   {
   $this->inputtext.="<b>$libelle</b><input type=\"text\" name=\"$name\" /><br /><br />";
   }
  
   public function setsubmit($name="envoi",$value="Envoyer")
   {
   $this->btnsubmit="<input type=\"submit\" name=\"$value\" value=\"Envoyer\" class=\"toto\"/>";
   }

   public function setreset($name="annule",$value='Annuler')
   {
    $this->btnreset="<input type=\"reset\" name=\"$value\" value=\"Annuler\"/><br />";
   }
  
   public function getform()
   {
   $this->html="";
   $this->html.=$this->entete;
   $this->html.=$this->inputtext;
   $this->html.=$this->btnsubmit;
   $this ->html.=$this->btnreset;
   $this->html.="</fieldset></form>";
   echo $this->html;
   }  
}

class Apropos{
   static private $version = "Ce que vous pouvez faire avec des Classes!!!";
   static public function getVersion(){
      return self:: $version;
   }
}
   ?>


<?php

class form2 extends form
{
protected $btnradio;
protected $btncocher;
public function __construct($action,$titre,$methode="post")
{
parent::__construct($action,$titre);
}

public function setradio($name,$libelle,$value)
{
$this->btnradio.="<b>$libelle</b><input type=\"radio\" name=\"$name\" value=\"$value\"/><br/>";
}
public function setcocher($name,$libelle,$value)
{
$this->btncocher.="<b>$libelle</b><input type=\"checkbox\" name=\"$name\" value=\"$value\" /><br />";
}
public function getform()
{
$this->html="";
$this->html.=$this->entete;
$this->html.=$this->inputtext;
$this->html.=$this->btnradio;
$this->html.=$this->btncocher;
$this->html.=$this->btnsubmit;
$this->html.=$this->btnreset;
$this->html.="</fieldset></form>";
echo $this->html;
}
}


?>

</body>
</html>