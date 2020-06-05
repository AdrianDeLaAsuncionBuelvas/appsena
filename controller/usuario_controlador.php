<?php
class usuario_controlador {
	public function index(){
		require_once "view/usuario/index.php";
	}
	public function frmCrear(){
		require_once "view/usuario/frmCrear.php";
	}

	public function frmPass(){
		require_once "view/usuario/frmPass.php";	
	}
	public function crear(){
		$enc = usuario_modelo::mdlValidarUsuario($_POST['ndoc']);
		if($enc == 0){
		$res = usuario_modelo::mdlCrear($_POST['nombres'], $_POST['tp'], $_POST['correo'],
	                                    $_POST['apellidos'], $_POST['ndoc'], $_POST['fch'], $_POST['rol']);
		if($res == 1)
			echo "!!--SE HA REGISTRADO EXITOSAMENTE--!!";
	}else 
	
	echo "Ya esta registrado";
	
}
	public function listar(){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM t_usuario";
		$res = $c->prepare($consulta);
		$res->execute();
		$datos = $res->fetchAll(PDO::FETCH_ASSOC);
				
		echo "<table class='table table-bordered'>";
		echo "<tr>";
		echo "<th>NOMBRE</th>";
		echo "<th>APELLIDO</th>";
		echo "<th>CORREO</th>";
		echo "<th>NUMERO DE DOCUMENTO</th>";
		echo "<th> </th>";
		echo "</tr>";
		foreach ($datos as $value) {
	    echo "<tr>";
		echo "<td>".$value['USU_NOMBRE']."</td>";
		echo "<td>".$value['USU_APELLIDO']."</td>";
		echo "<td>".$value['USU_CORREO']."</td>";
		echo "<td>".$value['USU_NUM_DOC']."</td>";
		echo "<td><a href=' ?controlador=usuario&accion=frmEditar&id=".$value['USU_ID']."' >Editar</a></td>";
		echo"</tr>";
		} 
		echo"</table>";
}

		public function frmEditar(){
		$r = usuario_modelo::mdlBuscarXID($_GET['id']);
		if(is_array($r)){
		require_once "view/usuario/frmPass.php";
	}else{
		header("Location: ?controlador=formacion&accion=index");
	}
	}
	public function cambiarContra(){
		if($_POST['pass1'] == $_POST['pass2']){
		$r = usuario_modelo::mdlValidarContra($_POST['pass']);
		if($r == 1){
			$datos = array("text" => "Las Contraseñas No Coincide con la registrada", "estado" => "danger");
		}else{
			$r = usuario_modelo::mdlEditar($_POST['pass1']);
			$datos = array("text" => "La Contraseña se Ha Editado", "estado" => "success");
		   }
		}else{
			$datos = array("text" => "Las Contraseñas No Coinciden", "estado" => "warning");

		}
		echo json_encode($datos);
	}
}
