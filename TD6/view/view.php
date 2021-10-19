<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title><?php echo $pagetitle; ?></title>

    </head>
    <body>
    <p class="mylink">
        <a href ="?action=readAll">ReadAll</a>
        <a href ="?action=readAll&controller=utilisateur">ReadAll et Utilisateur</a>
        <a href ="?action=readAll&controller=trajet">ReadAll et trajet</a>
    </p>


    <?php
    // Si $controleur='voiture' et $view='list',
    // alors $filepath="/chemin_du_site/view/voiture/list.php"
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    ?>
    </body>

<footer>
    <p style="border: 1px solid black;text-align:right;padding-right:1em;">
        Site de covoiturage de Logan Dejesus
    </p>
</footer>
</html>




