<?php 

require_once 'config/config.php';
require_once 'model/db.php';
require_once 'controller/cliente.php';

if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");


$controlador = new cliente();

$dataToView = array();
$dataToView  = $controlador->{$_GET["action"]}();
var_dump($dataToView);

// Leer vistas
require_once 'view/template/header.php';
require_once 'view/'.$controlador->view.'.php';
require_once 'view/template/footer.php';

?>