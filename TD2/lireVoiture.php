<?php
require_once 'Model.php';

    $pdo = Model::getPDO();
    $rep = $pdo->query('SELECT * FROM voiture');
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

    foreach ($tab_obj as $cle => $valeur){
        echo "<li> Voiture  ",$valeur['immatriculation'] ," de marque ",$valeur['marque'] ," (couleur ", $valeur['couleur'],")</li>";
    }

?>