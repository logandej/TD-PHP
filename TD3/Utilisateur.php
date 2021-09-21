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
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if(!is_null($m) && !is_null($c) && !is_null($i)) {
            $this->login = $m;
            $this->nom = $c;
            $this->prenom = $i;
        }
    }
    public function afficher() {
        echo "  login:  ",$this->login, "  ||  nom:  ", $this->nom, "  ||  prénom:  ", $this->prenom;

    }
    public static function getAllUtilisateurs(){

        require_once 'Model.php';

        $pdo = Model::getPDO();
        $rep = $pdo->query('SELECT * FROM utilisateur');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $tab_utilisateur = $rep->fetchAll();

        return $tab_utilisateur;
    }
              
}
?>