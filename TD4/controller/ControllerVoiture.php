
<body><link rel="stylesheet" href="../style.css"></body>
<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require ('../view/voiture/list.php');  //"redirige" vers la vue
    }


    public static function read() {

        $im = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($im);
        if(empty($v)){
            require ('../view/voiture/error.php');  //"redirige" vers la vue
        }
        else require ('../view/voiture/detail.php');
    }

}
?>
