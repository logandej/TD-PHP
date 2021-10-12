<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
    <?php
    $tab_v = ModelVoiture::getAllVoitures();
    foreach ($tab_v as $v) {
        echo '<p> Voiture d\'immatriculation est ' . $v->getImmatriculation() . '.</p>';
        echo "<a href = ../controller/routeur.php?action=read&immat={$v->getImmatriculation()}>°details°</a>";
        //https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD4/controller/routeur.php?action=read&immat=CS033GQ
    }
    ?>
    </body>
</html>

