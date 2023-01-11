<?php
// Conexión
$servidor = '127.0.0.1';
$usuario = 'root';
$password = '';
$basededatos = 'tienda_ropa';

try{
	$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
} catch(Exception $e){
	header("Location: error.php");
}



mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if(!isset($_SESSION)){
	session_start();
}



/*$db = new mysqli($servidor, $usuario, $password, $basededatos);

if($db->connect_errno){
	die("La conexión ha fallado".$db->connect_errno);


	catch... header("Location: ../")
} */