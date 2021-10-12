<?php

require_once File::build_path(array("model","Model.php"));//Model.php
class ModelVoiture {

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
            // donc on retombe sur le conss 'ModelVoiture' not found in /home/ann2/dejesusl/public_html/PHP/TD4/view/voiture/list.php:12 Stack trace: #0 {main} thrown in /home/ann2/dejesusl/public_html/PHP/TD4/view/voiture/list.php on line 12tructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }
    }
              
    // une methode d'affichage.
    /*public function afficher() {
      echo "  Marque :  ",$this->getMarque(), "  ||  Couleur :  ", $this->GetCouleur(), "  ||  Immatriculation:  ", $this->GetImmatriculation();

    }*/

    //getter
    public function getImmatriculation(){
        return $this->immatriculation;
    }
    public function getCouleur(){
        return $this->couleur;
    }

    //setter
    public function setImmatriulation($imma){
        $this->immatriculation = $imma;
    }
    public function setCouleur($coul){
        $this->couleur = $coul;
    }
    public static function getAllVoitures(){


        $pdo = Model::getPDO();
        $rep = $pdo->query('SELECT * FROM voiture');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $rep->fetchAll();

        /*foreach ($tab_voit as $cle => $valeur) {
            echo "<center>";
            $valeur->afficher();
            echo "<br>";
        }*/
        return $tab_voit;
    }

    public static function getVoitureByImmat($immat) {
        $sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);

        $values = array(
            "nom_tag" => $immat,
            //nomdutag => valeur, ...
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);

        // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
    }
    public function save(){
        $sql = "INSERT INTO voiture (marque, couleur, immatriculation) VALUES (:Marque, :Couleur, :Imma)";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);
        $values = array(
            "Marque" => $this->marque,
            "Couleur" => $this->couleur,
            "Imma" => $this->immatriculation,
        );
        // On donne les valeurs et on exécute la requête
        $req_prep->execute($values);
    }
}
?>

