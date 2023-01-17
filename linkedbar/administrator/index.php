<?php 

require_once 'config/config.php';

require_once '../model/db.php';

if(!isset($_GET["controller"])) $_GET["controller"] = constant("DEFAULT_CONTROLLER");
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");

$controller_path = 'controller/'.$_GET["controller"].'.php';

if(!file_exists($controller_path)) $controller_path = 'controller/'.constant("DEFAULT_CONTROLLER").'.php';



require_once $controller_path;

$controladorName = $_GET["controller"];

$controlador = new $controladorName();

$dataToView = array();
$dataToView  = $controlador->{$_GET["action"]}();

var_dump($dataToView);

// Leer vistas
require_once 'view/template/header.php';
require_once 'view/'.$controlador->view.'.php';
require_once 'view/template/footer.php';

?>