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
    // une methode d'affichage.
    public function afficher() {
        echo "  date:  ",$this->date, "  ||  depart:  ", $this->départ, "  ||  arrivée  ", $this->arrivee, "  ||  prix  ", $this->prix;

    }

    public static function getAllTrajets(){

        require_once 'Model.php';

        $pdo = Model::getPDO();
        $rep = $pdo->query('SELECT * FROM trajet');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
        $tab_trajet = $rep->fetchAll();

        return $tab_trajet;
    }

    public static function findPassagers($id){
        require_once 'Utilisateur.php';

        $sql = "SELECT * FROM utilisateur U
                            JOIN passager P ON P.utilisateur_login = U.login
                            JOIN trajet T ON T.id = P.trajet_id
                            WHERE id=:idU";
        // Préparation de la requête
        $req_prep = Model::getPDO()->prepare($sql);
        $pdo = Model::getPDO();
        $values = array(
            "idU" => $id,
            //nomdutag => valeur, ...
        );
        $req_prep->execute($values);


        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $utilisatueurID = $req_prep->fetchAll();

        return $utilisatueurID;
    }
              
}
?>