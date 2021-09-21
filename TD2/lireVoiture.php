<?php
require_once 'Model.php';
require_once 'Voiture.php';

    $pdo = Model::getPDO();
    $rep = $pdo->query('SELECT * FROM voiture');
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();

    Voiture::getAllVoitures();

?>