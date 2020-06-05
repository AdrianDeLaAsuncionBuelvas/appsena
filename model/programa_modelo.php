<?php
class programa_modelo{
	public static function mdlcrearPro($nombre, $codigo){
		$db = new conexion();
        $c = $db->conectar();
        $qry = "INSERT INTO t_programa(PRO_NOMBRE, PRO_CODIGO, PRO_ESTADO) VALUES  (:nombre, :codigo,:estado)";
        $res = $c->prepare($qry);
        $ka = $res->execute(array("nombre" => $nombre, 
                                  "codigo" => $codigo,
                                  "estado" => 1));
        return $ka;
    }
    public static function mdlvalidar($codigo){
    $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_programa WHERE PRO_CODIGO = :codigo";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("codigo"=> $codigo));
    if ( $res->rowCount() > 0) {
      return 1;
    }else{
      return 0;
    }
    }
    public static function mdlbuscarProgramas($codigopro){
        $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_programa WHERE PRO_CODIGO LIKE ?";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("$codigopro%"));
    if ( $res->rowCount() > 0) {
      return $res->fetchAll();
    }else{
      return 0;
    }
    }
    public static function mdlBuscarXID($id){
        $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_programa WHERE PRO_ID = :id";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("id"=> $id));
    return $res->fetch();
    }
    public static function mdlEditar($codigo, $nombre, $id){
        $db = new conexion();
        $c = $db->conectar();
        $qry = "UPDATE t_programa SET 
        PRO_NOMBRE = :nombre,
        PRO_CODIGO = :codigo
         WHERE PRO_ID = :id";
        $res = $c->prepare($qry);
        $est = $res->execute(array("nombre" => $nombre, 
                                  "codigo" => $codigo,
                                  "id" => $id));
        return $est;
    }
    public static function mdleliminar($id){
        $db = new conexion();
        $c = $db->conectar();
        $qry = "DELETE FROM t_programa WHERE PRO_ID = :id";
        $res = $c->prepare($qry);
        $est = $res->execute(array("id" => $id));
        return $est;
    }
}
?>