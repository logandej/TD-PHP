<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
        <link rel="stylesheet" href="../../tyle.css">
    </head>
    <body>
    <?php

        echo '<p> La voiture recherchée est: ' ."IMMA : ". $v->getImmatriculation() . " MARQUE: ". $v->getMarque() . " COULEUR: ". $v->getCouleur().  '.</p>';
        echo '<a href = ../controller/routeur.php?action=readAll>retourUWU</a>';
        //adresse fonctionnelle https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD4/controller/routeur.php?action=read&immat=CS033GQ
    ?>
    </body>
</html>
