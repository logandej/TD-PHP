<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
    	<?php
    		require_once("Voiture.php");
            require_once("Model.php");
    		$voiture1 = new Voiture($_GET['marque'],$_GET['Couleur'],$_GET['immatriculation']);
    		$voiture1->save();

    		echo "<center><p><strong><h3>Yes</h3></strong></p>";

    		$voiture1->afficher();
    		echo "La voiture à été enregistrée !"
      ?>
        
    	<p>L'Immatricualtion est <?php echo $_GET['immatriculation']; ?> !</p>
    	<p>La marque est <?php echo $_GET['marque']; ?> !</p>
    	<p>La couleur est <?php echo $_GET['Couleur']; ?> !</p>

    </body>

</html>

