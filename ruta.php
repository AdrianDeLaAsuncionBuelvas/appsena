<?php
function cargarContenido($controlador, $accion){

	require_once "controller/".$controlador."_controlador.php";
	$c = $controlador."_controlador";
	$obj = new $c();
	require_once"model/".$controlador."_modelo.php";
	$obj->$accion();
	}

$controladores = array(
	"inicio" => array("index", "frmLogin", "Validar", "cerrar"),
	"usuario" => array("index", "frmCrear", "crear","frmPass","listar", "frmEditar", "eliminar", "editar","cambiarContra"),
	"programa" => array("index", "frmCrear", "crear", "buscarProgramas", "frmEditar", "eliminar", "editar"),
	"formacion" => array("index", "frmCrear", "crear", "buscarFormacion", "frmEditar", "eliminar", "editar")
);
if(array_key_exists($controlador, $controladores)){
	if(in_array($accion, $controladores[$controlador])){
		cargarContenido($controlador, $accion);
	}else{
		echo "<br/>ERROR[001]:contenido no disponible";
	}
}else{
	echo "<br/>ERROR[002]:contenido no disponible";
}
?>