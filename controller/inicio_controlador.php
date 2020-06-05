<?php
class inicio_controlador {
	 function index(){
		echo "Hola  ";
}
	 function frmLogin(){
		require_once "view/inicio/login.php";
		
	}
	function Validar(){
		$r = inicio_modelo::mdValidar($_POST['usr'], $_POST['pwd']);
		if($r == 1){
			var_dump($_SESSION);
		    header('Location:/APPSENA');
		}else
			echo "verifique sus datos";
			 header ("view/formacion/index.php");
	}
	function cerrar(){
		session_destroy();
		header('Location:/APPSENA');
	}
}