<?php
require_once 'Model.php';

    $pdo = Model::getPDO();
    $rep = $pdo->query('SELECT * FROM voiture');
    $tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

    foreach ($tab_obj as $cle => $valeur){
        /*foreach ($valeur as $cle2 => $value){
            echo "<li> Voiture  ",$value[0] ," de marque ",$value[1] ," (couleur ", $value[2],")</li>";

            //echo "<br>";
            //var_dump($cle2);
        }*/
        //var_dump($valeur);
        echo "<li> Voiture  ",$valeur->immatriculation ," de marque ",$valeur->marque ," (couleur ", $valeur->couleur,")</li>";
    }

?>