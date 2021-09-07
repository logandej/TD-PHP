<?php
   
class Voiture {
   
    private $marque;
    private $couleur;
    private $immatriculation;
   
    // un getter      
    public function getMarque() {
        return $this->marque;
    }
   
    // un setter 
    public function setMarque($m) {
        $this->marque = $m;
    }
   
    // un constructeur
    public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    } 
              
    // une methode d'affichage.
    public function afficher() {
      system
    }

    //getter
    public function GetImmatriculation(){
        return this->immatriculation;
    }
    public function GetCouleur(){
        return this->couleur;
    }

    //setter
    public function SetImmatriulation($imma){
        $this->immatriculation = $imma;
    }
    public function SetCouleur($coul){
        $this->couleur = $coul;
    }
}
?>

