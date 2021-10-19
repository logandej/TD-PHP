<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Mon premier php </title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
<form method="post" action="index.php?action=created">
    <fieldset>
        <legend>Mon formulaire :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="AA-000-AA" name="immat" id="imma" required/>
        </p>
        <p>
            <label for="marque_id">Marque</label> :
            <input type="text" placeholder="Ex: Clio" name="ma" id="ma" required/>
        </p>
        <p>
            <label for="couleur_id">Couleur</label> :
            <input type="text" placeholder="Ex: Jaune" name="coul" id="coul" required/>
        </p>
        <p>

            <a>
                <input class="button" type="submit" value="Envoyer" />
                <input type='hidden' name='action' value='created'>
            </a>

        </p>
    </fieldset>
</form>

</body>



</html>