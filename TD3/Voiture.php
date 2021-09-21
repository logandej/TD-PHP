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
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $req_prep->fetchAll();
        // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_voit))
            return false;
        return $tab_voit[0];
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

        $pdo = Model::getPDO();
        $rep = $pdo->query('SELECT * FROM voiture');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
        $tab_voit = $rep->fetchAll();

        /*foreach ($tab_voit as $cle => $valeur) {
            echo "<center>";
            $valeur->afficher();
            echo "<br>";
        }*/
        return $tab_voit;
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

