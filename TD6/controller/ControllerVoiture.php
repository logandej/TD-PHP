
<body><link rel="stylesheet" href="../style.css"></body>
<?php
require_once File::build_path(array("model","ModelVoiture.php")); // chargement du modelVoiure

class ControllerVoiture {
    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        $controller='voiture';
        $view='list';
        $pagetitle='Liste des voitures.';
        require File::build_path(array("view","view.php")); //"redirige" vers la vue list.php
    }


    public static function read() {

        $im = $_GET['immat'];
        $v = ModelVoiture::getVoitureByImmat($im);
        $controller='voiture';
        $view='list';

        if(empty($v)){
            $pagetitle='Erreur';
            $view='error';//"redirige" vers la vue error
        }
        else {   $view='detail';  $pagetitle='Details';}//"redirige vers la vue detail

        require File::build_path(array("view","view.php"));
    }
    public static function create() {

        $controller='voiture';
        $view='create';
        $pagetitle='Creer des voitures.';
        require File::build_path(array("view","view.php")); // redirige vers create.php
    }
    public static function created() {


        $im = $_POST['immat'];
        $coul = $_POST['coul'];
        $ma = $_POST['ma'];
        $voiture1 = new ModelVoiture($ma,$coul,$im);
        $voiture1->save();

        $controller='voiture';
        $view='created';
        $pagetitle='voiture créée.';
        require File::build_path(array("view","view.php")); //list.php

    }

    public static function error() {

        $controller='voiture';
        $view='error';
        $pagetitle='error';
        require File::build_path(array("view","view.php")); //list.php

    }

}
?>
