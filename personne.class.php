
<?php

class Personne{

     public $nom;
     public $email;


     public function __construct()
     {
         $this->nom = "sans nom";
         $this->email =  "sans mail";
     }

   public function getNom(){
       return $this ->nom;
   }

   public function getEmail(){
       return $this->email;
   }

   public function afficher(){
       return "<strong>Nom : </strong>".$this->getNom().
       "<br><strong>Email : </strong>".$this->getEmail();
   }

   
} 

class Employe extends Personne{  // créer une classe qui hérite de la classe principale

    public $badge;

    public function __construct(){
        parent ::__construct();         // on utilise parent:: car on va chercher dans la 1ere classe que l'on appelle parent 
        $this->badge = 'numero de badge inconnu';
    }
   

  public function getBadge(){
      return $this->badge;
  }

  public function afficher(){
      return "<strong>Nom : </strong>".$this->getNom().
      "<br><strong>Email : </strong>".$this->getEmail().
      "<br><strong>Badge : </strong>".$this->getBadge();
  }
}
   
?>