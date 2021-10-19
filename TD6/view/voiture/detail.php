<!DOCTYPE html>
<html>

    <body>
    <?php
    echo '<p> La voiture recherchée est: ' ."IMMA : ". htmlspecialchars($v->getImmatriculation()) . " MARQUE: ". htmlspecialchars($v->getMarque()) . " COULEUR: ". htmlspecialchars($v->getCouleur()).  '.</p>';
        echo '<a href = ?action=readAll>retourUWU</a>';
        //adresse fonctionnelle https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD4/controller/routeur.php?action=read&immat=CS033GQ
    ?>
    </body>
</html>
