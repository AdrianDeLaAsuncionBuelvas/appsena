<?php
session_start();
require_once "conexion.php";
	if(isset($_GET['controlador']) && isset($_GET['accion'])){
	   $controlador = $_GET['controlador'];
	    $accion = $_GET['accion'];
}else{
	$controlador = "inicio";
	$accion      = "index";
}
define("URL","http://". $_SERVER['SERVER_NAME']."/APPSENA");
if(!empty($_POST)){
	require_once "ruta.php";
}else{
require_once "plantilla.php";

}
?>