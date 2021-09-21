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
    /*public function __construct($m, $c, $i) {
        $this->marque = $m;
        $this->couleur = $c;
        $this->immatriculation = $i;
    }*/
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            // Si aucun de $m, $c et $i sont nuls,
            // c'est forcement qu'on les a fournis
            // donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }
              
    // une methode d'affichage.
    public function afficher() {
      echo "  Marque :  ",$this->getMarque(), "  ||  Couleur :  ", $this->GetCouleur(), "  ||  Immatriculation:  ", $this->GetImmatriculation();

    }

    //getter
    public function GetImmatriculation(){
        return $this->immatriculation;
    }
    public function GetCouleur(){
        return $this->couleur;
    }

    //setter
    public function SetImmatriulation($imma){
        $this->immatriculation = $imma;
    }
    public function SetCouleur($coul){
        $this->couleur = $coul;
    }
    public static function getAllVoitures(){

        require_once 'Model.php';
        require_once 'Voiture.php';

        $pdo = Model::getPDO();
        $rep = $pdo->query('SELECT * FROM voiture');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $rep->fetchAll();

        foreach ($tab_voit as $cle => $valeur) {
            echo "<center>";
            $valeur->afficher();
            echo "<br>";
        }
    }
}
?>

