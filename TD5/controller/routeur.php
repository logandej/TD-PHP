
<body><link rel="stylesheet" href="../style.css"></body>
<?php
require '..'.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'File.php';
require_once File::build_path(array("controller","ControllerVoiture.php"));//ControllerVoiture.php
require_once File::build_path(array("model","ModelVoiture.php"));//ModelVoiture.php
// On recupère l'action passée dans l'URL
$action = $_GET['action'];
// Appel de la méthode statique $action de ControllerVoiture
ControllerVoiture::$action();
?>
