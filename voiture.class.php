<?php
      class Voiture{
        private $Immatriculation;
        private $Couleur;
        private $Poids;
        private $Puissance;
        private $CapaciteDuReservoir;
        private $NiveauEssence;
        private $NbPlaces;
        private $Assure;
        private $MessageTableauBord;
                  
               
    public function __construct($immat,$couleur,$poids,$puissance,$reservoir,$nbplaces)
          {
               $this->Immatriculation =$immat;
               $this->Couleur = $couleur;
               $this->Poids =$poids;
               $this->Puissance = $puissance;
               $this->CapaciteDuReservoir =$reservoir;
               $this->NiveauEssence = 5.00;
               $this ->Assure = false;
               $this ->NbPlaces =$nbplaces;
               $this ->MessageTableauBord = "Bonjour";
                
               
          } 

        //   public function toHTML(){

        //    $chaine = "<h1>Nouvelle voiture: </h1></br>".
        //     "<strong>Immatriculation: </strong>" .$this ->Immatriculation.
        //     "<br><strong>Couleur: </strong>".$this->Couleur.
        //     "<br><strong>Poids: </strong>".$this->Poids.
        //     "<br><strong>Puissance: </strong>".$this->Puissance.
        //     "<br><strong>Capacité Du Reservoir: </strong>".$this->CapaciteDuReservoir.
        //     "<br><strong>Niveau Essence: </strong>".$this->NiveauEssence;

        //     if ($this->Assure){ // par defaut c'est true $this->Assure == true ou pour false !$this->Assure
        //         $chaine.= "<br><strong>Assure: </strong> oui";}

        //     else {
        //         $chaine.= "<br><strong>Assure: </strong> non";}

        //     $chaine.="<br><strong>Nb Places: </strong>".$this->NbPlaces.
            
        //     "<br><strong>Message: </strong>".$this->MessageTableauBord;
        //     return $chaine;
          
        public function setNiveauEssence($misejourEssence){
            $this->NiveauEssence = $misejourEssence;  // fonction changer le niveau déjà déclaré 
          }

         
          public function toHTML(){

               $chaine = "<h1>Nouvelle voiture: </h1></br>".
                "<strong>Immatriculation: </strong>" .$this ->getImmat().
                "<br><strong>Couleur: </strong>".$this->getCouleur().
                "<br><strong>Poids: </strong>".$this->getPoids()."kg".
                "<br><strong>Puissance: </strong>".$this->getPuissance()."CV".
                "<br><strong>Capacité Du Reservoir: </strong>".$this->getReservoir()."L".
                "<br><strong>Niveau Essence: </strong>".$this->getNiveauEssence();
    
                if ($this->getAssure()){ // par defaut c'est true $this->Assure == true ou pour false !$this->Assure
                    $chaine.= "<br><strong>Assure: </strong> oui";}
    
                else {
                    $chaine.= "<br><strong>Assure: </strong> non";}
    
                $chaine.="<br><strong>Nb Places: </strong>".$this->getNbplaces().
                
                "<br><strong>Message: </strong>".$this->getMessage()."<br>";



                return $chaine;
              
                

            }

          public function getImmat(){
        return $this->Immatriculation;
          }

          public function getCouleur(){
            return $this ->Couleur;
        }
        public function getPoids(){
            return $this ->Poids;
        }
        public function getPuissance(){
            return $this ->Puissance;
        }
        public function getReservoir(){
            return $this ->CapaciteDuReservoir;
        }
        public function getNiveauEssence(){
            return $this ->NiveauEssence;
        }
        public function getAssure(){
            return $this ->Assure;
        }
        public function getNbplaces(){
            return $this ->NbPlaces;
        }
        public function getMessage(){
            return $this ->MessageTableauBord;
        }

        

        public function setAssure($misejourAssure){
            return $this ->Assure =$misejourAssure;
        }

        public function setMessage($misejourTableau){
            return $this ->MessageTableauBord =$misejourTableau;
        }

        

        public function repeindre($NouvelleCouleur){
            // if (isset($NouvelleCouleur)){

            if ($this->Couleur == $NouvelleCouleur) { // comparaison des couleurs donc ==
                // echo "Couleur identique";
                return false;// erreur vrai 


            } else  {
                $this->Couleur = $NouvelleCouleur; // attribution nouvelle couleur donc 1 seul =
                // echo "Merci pour la peinture";
                return true; // erreur false
            }
            // }
            // else {
            //     return false;
            // }
        }
            public function Mettre_essence($quantite)
            {    
            if($quantite > ($this->CapaciteDuReservoir - $this->NiveauEssence)) 
             {
             echo "tu vas mouiller tes chaussures !";
            }      
              else
              {     
                //   $this->setNiveauEssence($this->getNiveauEssence() + $quantite);
                    $this ->NiveauEssence += $quantite;
                }
                return $this ->NiveauEssence; // indiquer mon nouveau niveau essence 
             }


            private function Consoessence($vitesse){  // calculer conso essence suivant données dans le texte
               
                if ($vitesse <=50) {
                    $this->conso = 10/100;
                }
                 else if ($vitesse > 50 && $vitesse <=90) {
                    $this->conso = 5/100;
                }
                 else if ($vitesse > 90 && $vitesse <=130) {
                    $this->conso = 8/100;
                }
                 else if ($vitesse > 130) {
                    $this->conso = 12/100;
                }
                return  $this ->conso; // penser à retourner la variable que l'on vient de calculer 
            }

            public function sedeplacer($distance,$vitesse){
                
                $this ->conso = $this ->Consoessence ($vitesse)*$distance;
                if($this ->conso >$this->NiveauEssence){
                    echo "vous n'avez pas assez d'essence";
                }
                else{
                    $this->NiveauEssence - $this ->conso;
                    echo " <br> il vous reste: ".$this ->conso;
                }
            
            }  
           
            public function __toString() {
                return 'Immatriculation : ' .$this->Immatriculation. '<br>
                Couleur : ' .$this->Couleur. '<br>
                Puissance : ' .$this->Puissance. '<br><br>';
            
            }

            
     
        }
      
     
        
        

        
           

        


?>
        
            
            

    
            
  
  
 
        
        
    
 

 