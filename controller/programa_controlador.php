<?php
class programa_controlador {
	public function index(){
		require_once "view/programa/index.php";
	}
	public function frmCrear(){
		require_once "view/programa/frmProgramas.php";
	}
	public function crear(){
		$res = programa_modelo::mdlValidar($_POST['codigo']);
		if($res == 0){
			$res = programa_modelo::mdlcrearPro($_POST['nombre'], $_POST['codigo']);
			echo "!Se Registro Correctamente!";	
		}elseif($res == 1)
			echo "!!El Programa Ya Existe!!";
			echo "</br>";
			echo "<a href=\"javascript:history.back()\"><img src=\"resource/img/atras2.png\" width=\"5%\" alt=\"Botón\"</a>";			            
		}
	public function buscarProgramas(){
		$rst = programa_modelo::mdlbuscarProgramas($_POST['codigopro']);
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
		$tbl = $tbl."<td>".$value['PRO_CODIGO']."</td>";
		$tbl = $tbl."<td>".$value['PRO_NOMBRE']."</td>";
		$tbl = $tbl."<td>".$value['PRO_ESTADO']."</td>";
		$tbl = $tbl."<td><a href='?controlador=programa&accion=frmEditar&id=".$value['PRO_ID']."'' >Editar</a></td>";
		$tbl = $tbl."<td><a href='?controlador=programa&accion=eliminar&id=".$value['PRO_ID']."' onclick='return confirm(\"Esta Seguro de Eliminar?\");'>Eliminar</a></td>";
		$tbl = $tbl."</tr>";
		} 
		$tbl = $tbl."</table>";
		$datos = array("text" => $tbl);
		echo json_encode($datos);
	}
	public function frmEditar(){
		$r = programa_modelo::mdlBuscarXID($_GET['id']);
		if(is_array($r))
		require_once "view/programa/frmEditar.php";
	else
		header("Location: ?controlador=programa&accion=index");
	}
	public function editar(){
		$r = programa_modelo::mdlEditar($_POST['codigo'], $_POST['nombre'], $_POST['id']);
		if($r==1){
			$datos = array("text" => "Programa Editado", "estado" => "success");
		}else {
			$datos = array("text" => "Error", "estado" => "danger");
		}
		echo json_encode($datos);
	}
	public function eliminar(){
		$r =programa_modelo::mdlEliminar($_GET['id']);
		if($r > 0){
			echo "Registro Eliminado";
			echo "</br>";
			echo "<a href=\"javascript:history.back()\"><img src=\"resource/img/atras2.png\" width=\"5%\" alt=\"Botón\"</a>";
		}else{
			echo "Error";
		}
	}

}		            