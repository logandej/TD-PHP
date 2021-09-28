<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
        <link rel="stylesheet" href="../../tyle.css">
    </head>
    <body>
    <?php
    $tab_v = ModelVoiture::getAllVoitures();
    foreach ($tab_v as $v)
        echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() . '.</p>';
    ?>
    </body>
</html>

