<?php

require_once "Model.php";
require_once "Trajet.php";
require_once "Utilisateur.php";

$tabId = Trajet::findPassagers($_GET['idU']);

foreach ($tabId as $value){
    $value->afficher();
    echo "<br>";
}
?>
<body>
<link rel="stylesheet" href="style.css">
</body>

