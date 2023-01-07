<?php
require_once "controlador/control_notas.php";
require_once "modelo/db.php";
require_once "constantes/config.php";

// indicar qué contiene la variable "action"
if (!isset($_GET["action"]))
    $_GET["action"] = constant("DEFAULT_ACTION");


// inicializar controlador
$control = new Controlador();


// rellenar con los datos
$datos = array();
$datos = $control->{$_GET["action"]}();


// cargar la vista
require_once "vistas/plantillas/cabecera.html";
require_once "vistas/".$control->vista.".php";
require_once "vistas/plantillas/cierre.html";