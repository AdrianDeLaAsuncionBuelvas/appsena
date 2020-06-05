<?php
class formacion_modelo{
	 public static function mdlListarFormacion(){
		$db = new conexion();
		$c = $db->conectar();
		$consulta = "SELECT * FROM t_programa";
		$res = $c->prepare($consulta);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array());
		$datos = $res->fetchAll();
		return $datos;
				
	}
	public static function mdlcrearFor($pro,$nom, $cod, $finicio, $ffin){
	$db = new conexion();
	$c = $db->conectar();
	$registro = "INSERT INTO t_formacion 
	(FOR_PRO_ID,
	FOR_NOMBRE,
	FOR_CODIGO,
	FOR_FCH_INICIO,
	FOR_FCH_FIN,
	FOR_ESTADO) VALUES 
	(:pro,
	:nom,
	:cod,
	:fchinc,
	:fchfin,
	:forest)";
	$res = $c->prepare($registro);
	$est = $res->execute(array(
		"pro" =>$pro,
		"nom" => $nom, 
		"cod" => $cod,
		"fchinc" => $finicio,
		"fchfin" => $ffin,
		"forest" => 1));
	return $est;


}
	public static  function mdlValidarformacion($codfor){
		$db = new conexion();
		$c = $db->conectar();
		   $consulta = "SELECT * FROM t_formacion WHERE FOR_CODIGO =:codfor" ;
		$res = $c->prepare($consulta);
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array("codfor" => $codfor));

		if($res->rowCount() > 0){
			return 1;
		}else{
			return 0;
		}	
	}
	    public static function mdlbuscarFormacion($codigoform){
        $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_formacion WHERE FOR_CODIGO LIKE ?";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("$codigoform%"));
    if ( $res->rowCount() > 0) {
      return $res->fetchAll();
    }else{
      return 0;
    }
    }

    public static function mdlBuscarXID($id){
        $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_formacion WHERE FOR_ID = :id";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("id"=> $id));
    return $res->fetch();
    }
    public static function mdlEditar($nombre, $codigo, $id){
        $db = new conexion();
        $c = $db->conectar();
        $qry = "UPDATE t_formacion SET 
        FOR_NOMBRE = :nombre,
        FOR_CODIGO = :codigo
         WHERE FOR_ID = :id";
        $res = $c->prepare($qry);
        $est = $res->execute(array("nombre" => $nombre, 
                                  "codigo" => $codigo,
                                  "id" => $id));
        return $est;
    }

    public static function mdlEliminar($id){
        $db = new conexion();
        $c = $db->conectar();
        $qry = "DELETE FROM t_formacion WHERE FOR_ID =:id"; 
        $res = $c->prepare($qry);
        $est = $res->execute(array("id" => $id));
        return $est;
    }
}