<!DOCTYPE html>
    <html>

    <body>
    <?php
    $tab_v = ModelVoiture::getAllVoitures();
    foreach ($tab_v as $v) {
        $immat = $v->getImmatriculation();
        echo '<p> Voiture d\'immatriculation est  ' . htmlspecialchars($immat) . '.</p>';
        echo '<a href = ?action=read&immat=' . rawurlencode($immat) . '>°details°</a>';
        //https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD4/controller/routeur.php?action=read&immat=CS033GQ

    }

    ?>
     <audio controls> <source src="../../uwu1.mp3" type="audio/mpeg" /> </audio>;
    </body>
</html>

