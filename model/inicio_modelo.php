<?php
class inicio_modelo{
	public static function mdValidar($usuario, $pass){
		$db = new conexion();
        $c = $db->conectar();
        $consulta = "SELECT * FROM t_usuario
        WHERE
        USU_CORREO = :usr AND USU_NUM_DOC =:pass";
        $res = $c->prepare($consulta);
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $res->execute(array("usr" => $usuario, "pass" => $pass));
        if ($res->rowCount() > 0){
        	$_SESSION = $res->fetch();
            return 1;
	    }else
	        return 0;
    }
}
?>