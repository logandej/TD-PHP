<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <form method="get" action="creerVoiture.php">
        <fieldset>
            <legend>Mon formulaire :</legend>
            <p>
              <label for="immat_id">Immatriculation</label> :
              <input type="text" placeholder="AA-000-AA" name="immatriculation" id="immatriculation" required/>
            </p>
            <p>
              <label for="marque_id">Marque</label> :
              <input type="text" placeholder="Ex: Clio" name="marque" id="marque" required/>
            </p>
            <p>
              <label for="couleur_id">Couleur</label> :
              <input type="text" placeholder="Ex: Jaune" name="Couleur" id="couleur" required/>
            </p>
            <p>
              
            <a href="https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD1/creerVoiture.php">
                <input type="submit" value="Envoyer" />
            </a>

            </p>
        </fieldset> 
        </form>

    </body>

</html>