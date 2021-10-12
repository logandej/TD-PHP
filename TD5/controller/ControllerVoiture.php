
<body><link rel="stylesheet" href="../style.css"></body>
<?php
require_once File::build_path(array("model","ModelVoiture.php")); // chargement du modelVoiure

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require File::build_path(array("view","voiture","list.php")); //"redirige" vers la vue list.php
    }


    public static function read() {

        $im = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($im);
        if(empty($v)){
            require File::build_path(array("view","voiture","error.php"));  //"redirige" vers la vue error
        }
        else require File::build_path(array("view","voiture","detail.php")); //"redirige vers la vue detail
    }
    public static function create() {
        require File::build_path(array("view","voiture","create.php")); // redirige vers create.php
    }
    public static function created() {
        $im = $_POST['immat'];
        $coul = $_POST['coul'];
        $ma = $_POST['ma'];
        $voiture1 = new ModelVoiture($ma,$coul,$im);
        $voiture1->save();
        require File::build_path(array("view","voiture","list.php")); //list.php
    }

}
?>
