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

        $mon_tableau = array();

        $coordonnees['prenom'] = 'Logan';
        $coordonnees['nom'] = 'De Jesus';

        echo $coordonnees['prenom'];
        echo "<p></p>";
        echo $coordonnees['nom'];



        ?>
    </body>
</html> 