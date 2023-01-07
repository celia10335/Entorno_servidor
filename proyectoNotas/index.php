<?php
// Importar todo lo que se necesita para que la página funcione. En concreto: el controlador, la base de datos, las constantes (en el archivo config.php) y al final de la página, todo lo que tiene que ver con el dibujado (HTML): cabecera, contenido de la página en sí y cierre.
require_once "controlador/control_notas.php";
require_once "modelo/db.php";
require_once "constantes/config.php";

// indicar qué contiene la variable "action". Por defecto, se va a cargar el listado de notas (vista "list")
if (!isset($_GET["action"]))
    $_GET["action"] = constant("DEFAULT_ACTION");


// inicializar controlador, que se almacena como "$control"
$control = new Controlador();


// rellenar con los datos que devuelve el controlador, a través de sus distintos métodos
$datos = array();
$datos = $control->{$_GET["action"]}();


require_once "vistas/plantillas/cabecera.html";
require_once "vistas/" . $control->vista . ".php";
require_once "vistas/plantillas/cierre.html";