<?php
class usuario_modelo{

  public static function mdlCrear($nombres, $tp, $correo, $apellidos, $ndoc, $fch, $rol){
      $db  = new conexion();
    $c   = $db->conectar();

    $qry = "INSERT INTO t_usuario (USU_NOMBRE, USU_APELLIDO, USU_CORREO, USU_TP_DOC,
    USU_NUM_DOC, USU_FCH_NAC, USU_PASSWORD, USU_ROL)
    VALUES 
    (:nom, :ape, :correo, :tp, :ndoc, :fch_nac, :pass, :rol)";
    $res = $c->prepare($qry);
    $est = $res->execute(array("nom"=>$nombres, "ape"=>$apellidos, "correo"=>$correo,"tp"=>$tp, "ndoc"=>$ndoc,
    "fch_nac"=>$fch, "pass"=>sha1($ndoc), "rol"=>$rol));
    return $est;
  }
    public static function mdlValidarUsuario($num_doc){
      $db  = new conexion();
      $c = $db->conectar();
    $consulta = "SELECT * FROM t_usuario WHERE USU_NUM_DOC = :u";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("u"=> $num_doc));
    if ( $res->rowCount() > 0) {
      return 1;
    }else{
      return 0; 
    }
  }

      public static function mdlBuscarXID($id){
        $db  = new conexion();
    $c = $db->conectar();
    $consulta = "SELECT * FROM t_usuario WHERE USU_ID = :id";
    $res =  $c ->prepare($consulta);
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array("id"=> $id));
    return $res->fetch();
    }
    public static function mdlEditar($pass){
        $db = new conexion();
        $c = $db->conectar();
        $qry = "UPDATE t_usuario SET 
        USU_NUM_DOC = :pass
         WHERE USU_ID = :id";
        $res = $c->prepare($qry);
        $est = $res->execute(array("pass"=> ($pass),
                                      "id"=>$_SESSION['USU_ID']));
        return $est;
    } 

        public static function mdlValidarContra($pass){
            $db  = new conexion();
             $c = $db->conectar();
               $consulta = "SELECT * FROM t_usuario WHERE USU_ID = :id AND USU_NUM_DOC = :pass";
                   $res =  $c ->prepare($consulta);
                   $res->setFetchMode(PDO::FETCH_ASSOC);
                     $est = $res->execute(array("id"=>$_SESSION['USU_ID'],
                                      "pass"=>($pass)));
                         if ( $res->rowCount() > 0) {
      return 2;
    }else{
      return 1; 
    }
  
    }

}