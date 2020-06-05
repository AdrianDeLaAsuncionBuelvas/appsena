<?php
class formacion_controlador {
	public function index(){
		require_once "view/formacion/index.php";
	}
	public function frmCrear(){
		$datos = formacion_modelo::mdlListarFormacion();
		require_once "view/formacion/frmFormacion.php";
	}
	public function crear(){
		$res = formacion_modelo::mdlValidarformacion($_POST['cod']);
		if($res == 0){
		$res = formacion_modelo::mdlcrearFor($_POST['pro'],$_POST['nom'],$_POST['cod'],
	                                    $_POST['fchinc'], $_POST['fchfin']);
		if($res == 1)
			echo "!!Se Ha Registrado Exitosamente la Formacion!!";
	}else 
	
	echo "--!!Ya esta registrado!!--";
	echo "</br>";
			echo "<a href=\"javascript:history.back()\"><img src=\"resource/img/atras2.png\" width=\"5%\" alt=\"Botón\"</a>";
	
		}
			public function buscarFormacion(){
		$rst = formacion_modelo::mdlbuscarFormacion($_POST['codigoform']);
		$tbl = '';
		$tbl = $tbl."<table class='table table-bordered'>";
		$tbl = $tbl."<tr>";
		$tbl = $tbl."<th>CODIGO</th>";
		$tbl = $tbl."<th>NOMBRE</th>";
		$tbl = $tbl."<th>ESTADO</th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."<th></th>";
		$tbl = $tbl."</tr>";
		foreach ($rst as $value) {
	    $tbl = $tbl."<tr>";
		$tbl = $tbl."<td>".$value['FOR_CODIGO']."</td>";
		$tbl = $tbl."<td>".$value['FOR_NOMBRE']."</td>";
		$tbl = $tbl."<td>".$value['FOR_ESTADO']."</td>";
		$tbl = $tbl."<td><a href=' ?controlador=formacion&accion=frmEditar&id=".$value['FOR_ID']."' >Editar</a></td>";
		$tbl = $tbl."<td><a href='?controlador=formacion&accion=eliminar&id=".$value['FOR_ID']."' onclick='return confirm(\"Esta Seguro de Eliminar?\");'>Eliminar</a></td>";
		$tbl = $tbl."</tr>";
		} 
		$tbl = $tbl."</table>";
		$datos = array("text" => $tbl);
		echo json_encode($datos);
	}
		public function frmEditar(){
		$r = formacion_modelo::mdlBuscarXID($_GET['id']);
		if(is_array($r)){
		require_once "view/formacion/frmEditar.php";
	}else{
		header("Location: ?controlador=formacion&accion=index");
	}
	}
	public function editar(){
		$r = formacion_modelo::mdlEditar($_POST['nombre'], $_POST['codigo'], $_POST['id']);
		if($r==1){
			$datos = array("text" => "Programa Editado", "estado" => "success");
		}else {
			$datos = array("text" => "Error", "estado" => "danger");
		}
		echo json_encode($datos);
	}
	public function eliminar(){
		$r =formacion_modelo::mdlEliminar($_GET['id']);
		if($r > 0){
			echo "Registro Eliminado";
			echo "</br>";
			echo "<a href=\"javascript:history.back()\"><img src=\"resource/img/atras2.png\" width=\"5%\" alt=\"Botón\"</a>";
		}else{
			echo "Error";
		}
	}
}	
