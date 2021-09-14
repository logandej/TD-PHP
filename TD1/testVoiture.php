<!DOCTYPE html>
<html>
    <head>
    	
        <meta charset="utf-8" />
        <title>Voiture Test </title>
    </head>
   
    <body>
    	<?php
    		require_once("Voiture.php");
    		$voiture1 = new Voiture("Clio","jaune","CS-047-GQ");

    		echo "<center><p><strong><h3>Yes</h3></strong></p>";

    		$voiture1->afficher();
      ?>
    </body>

</html>
