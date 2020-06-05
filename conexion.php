<?php
class conexion{
	private $conn;
	public function __construct(){
		try{
			$this-> conn = new PDO('mysql:host=localhost;dbname=bd_sena','root','');
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	public function conectar(){
		if($this->conn instanceof PDO){
			return $this->conn;
		}
	}
}