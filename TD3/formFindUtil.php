<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Formulaire ID passagers </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form method="get" action="testFindUtil.php">
    <fieldset>
        <legend>Récuperer les passagers de votre trajet :</legend>
        <p>
            <label for="utilisateur_id">ID</label> :
            <input type="text" placeholder="456" name="idU" id="idU" required/>
        </p>
        <p>
            <a href="https://webinfo.iutmontp.univ-montp2.fr/~dejesusl/PHP/TD2/testFindUtil.php">
                <input type="submit" value="Envoyer" />
            </a>

        </p>
    </fieldset>
</form>

</body>

</html>
