<?php
   
class Utilisateur {
   
    private $login;
    private $nom;
    private $prenom;
   
    // un getter      
    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }
   
    // un setter 
    public function set($nom_attribut, $valeur) {
        $this->$nom_attribut = $valeur;
    }
   
    // un constructeur
    public function __construct($m, $c, $i) {
        $this->login = $m;
        $this->nom = $c;
        $this->prenom = $i;
    } 
              
}
?>