<?php
require_once 'Model.php';
require_once 'Voiture.php';
require_once 'Utilisateur.php';
require_once 'Trajet.php';


    echo "<center> Voitures : <br>";
    $tab_voit = Voiture::getAllVoitures();
    foreach ($tab_voit as $cle => $valeur){
        $valeur->afficher();
        echo "<br>";
    }
    echo "Trajets : <br>";
    $tab_voit = Trajet::getAllTrajets();
    foreach ($tab_voit as $cle => $valeur){
        $valeur->afficher();
        echo "<br>";
    }
    echo "Utilisateurs : <br>";
    $tab_voit = Utilisateur::getAllUtilisateurs();
    foreach ($tab_voit as $cle => $valeur){
        $valeur->afficher();
        echo "<br>";
    }
    $myvoit = Voiture::getVoitureByImmat('CS047HD');
    var_dump($myvoit);

    $voiture1 = new Voiture("Peugeot","violet","CS-047-GQ");
    $voiture1->save();






?>