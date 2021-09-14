<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          echo "<center><p><strong><h3>https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD1/echo.php</h3></strong></p>";
          $texte = "hello Logan oui\n!";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;

          $prenom="Helmut";
          echo $prenom;


         
        echo "<p><strong> 1) Echo sur plusieurs lignes </strong></p>";
        $prenom="Helmut";
        echo <<< END
             <center><p>Ligne1</p>
             <p>Ligne2</p>
             <p>Ligne3</p></center>
END;

        echo "<p><strong> 2) Les print_r et var_dump sur les variables </strong></p>";

        print_r($prenom); 
        echo "<p></p>";
        var_dump($prenom);
        echo "<p>D'accord</p>";

        echo "<p><strong> 3) Tableaux Associatifs </strong></p>";


        $coordonnees['prenom'] = 'Logan';
        $coordonnees['nom'] = 'De Jesus';
        $coordonnees['date'] = '03/10/02';
        $coordonnees['age'] = '18';
        $coordonnees['mail'] = 'logan.dejesus1@gmail.com';

        echo $coordonnees['prenom'];
        echo "<p></p>";
        echo $coordonnees['nom'];

        $coordonnees2 = array (
        'prenom' =>  $coordonnees['prenom'],
        'nom'    => $coordonnees['nom'] );

        echo $coordonnees2['prenom'];
        echo $coordonnees2['nom'];

        echo "<p><strong> 4) Foreach </strong></p>";

        foreach ($coordonnees as $cle => $valeur){
            echo "$cle : $valeur\n";
            echo "<p></p>";
        }

        echo "<p><strong> Exo 4 </strong></p>";

        $prenom = "Marc";

        echo "Bonjour " . $prenom;
        echo "Bonjour $prenom";
        echo 'Bonjour $prenom';

        echo $prenom;
        echo "$prenom";

        echo "<p><strong> Exo 5 </strong></p>";

        $marque = 'clio';
        $immatriculation = 'CS-047-GQ';
        $couleur = 'orange';

        echo "<p> Voiture $immatriculation de marque $marque (couleur $couleur)";

         $voiture = array (
            'marque' => 'clio',
            'couleur' => 'orange',
            'immatriculation' => 'CS-047-GQ');
         $voiture1 = array (
            'marque' => 'renault',
            'couleur' => 'rouge',
            'immatriculation' => 'BQ-666-QB');
         $voiture2 = array (
            'marque' => 'lambo',
            'couleur' => 'bleu',
            'immatriculation' => 'AJ-733-GD');
         $voiture3 = array (
            'marque' => 'fiat',
            'couleur' => 'vert',
            'immatriculation' => 'JH-343-HD');


         echo "<p></p>";
        echo "<p> Voiture  ",$voiture['immatriculation'] ,"de marque ",$voiture['marque'] ,"(couleur", $voiture['couleur'],")</p>";
        
        echo "<p><strong> Listes des voitures: </strong></p>";

        $voitures[] = $voiture;
        $voitures[] = $voiture1;
        $voitures[] = $voiture2;
        $voitures[] = $voiture3;

        //print_r($voitures);
        echo "<ul>";
            foreach ($voitures as $cle => $valeur){
                echo "<li> Voiture  ",$valeur['immatriculation'] ," de marque ",$valeur['marque'] ," (couleur ", $valeur['couleur'],")</li>";
            }
        echo "</ul>";


        ?>
    </body>
</html> 