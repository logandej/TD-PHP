<?php
   
class Trajet {
   
    private $id;
    private $départ;
    private $arrivee;
    private $date;
    private $nbplaces;
    private $prix;
    private $conducteur_login;
   
    // un getter      
    public function get($nom_attribut) {
        return $this->$nom_attribut;
    }
   
    // un setter 
    public function set($nom_attribut, $valeur) {
        $this->$nom_attribut = $valeur;
    }
   
    // un constructeur
    public function __construct($m, $c, $i, $d, $n, $p, $c) {
        $this->id = $m;
        $this->départ = $c;
        $this->arrivée = $i;
        $this->date = $d;
        $this->nbplaces = $n;
        $this->prix = $p;
        $this->conducteur_login = $c;

    } 
              
}
?>