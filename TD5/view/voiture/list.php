<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
        <link rel="stylesheet" href="../../style.css">
    </head>
    <body>
    <?php
    echo htmlspecialchars('<a href="test">Test</a>');
    $tab_v = ModelVoiture::getAllVoitures();
    foreach ($tab_v as $v) {
        echo '<p> Voiture d\'immatriculation est  ' . htmlspecialchars($v->getImmatriculation()) . '.</p>';
        echo "<a href = ../controller/routeur.php?action=read&immat={$v->getImmatriculation()}>°details°</a>";
        //https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD4/controller/routeur.php?action=read&immat=CS033GQ

    }

    ?>
     <audio controls> <source src="../../uwu1.mp3" type="audio/mpeg" /> </audio>;
    </body>
</html>

