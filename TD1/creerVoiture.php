<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
    	<?php
    		require_once("../TD4/model/ModelVoiture.php");
    		$voiture1 = new Voiture("Clio","jaune","CS-047-GQ");

    		echo "<center><p><strong><h3>Yes</h3></strong></p>";

    		$voiture1->afficher();
      ?>
        
    	<p>L'Immatricualtion est <?php echo $_GET['immatriculation']; ?> !</p>
    	<p>La marque est <?php echo $_GET['marque']; ?> !</p>
    	<p>La couleur est <?php echo $_GET['Couleur']; ?> !</p>
    </body>

</html>

