
<body><link rel="stylesheet" href="../style.css"></body>
<?php
require_once File::build_path(array("controller","ControllerVoiture.php"));//ControllerVoiture.php
require_once File::build_path(array("model","ModelVoiture.php"));//ModelVoiture.php
// On recupère l'action passée dans l'URL
if(isset($_GET['action'])){
  $action=$_GET['action'];
  $class_methods = get_class_methods('ControllerVoiture');
  if(!in_array($action, $class_methods)){
      $action='error';
  }

}
else {$action='readAll';}
ControllerVoiture::$action();
// Appel de la méthode statique $action de ControllerVoiture

?>

