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
    public function __construct($m = NULL, $de = NULL, $i = NULL, $d = NULL, $n = NULL, $p = NULL, $c = NULL) {
        if(!is_null($m) && !is_null($de) && !is_null($i) && !is_null($d) && !is_null($n) && !is_null($p) && !is_null($c)) {
            $this->id = $m;
            $this->départ = $de;
            $this->arrivee = $i;
            $this->date = $d;
            $this->nbplaces = $n;
            $this->prix = $p;
            $this->conducteur_login = $c;
        }

    } 
              
}
?>