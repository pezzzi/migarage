<?php
// esta clase usa la clase Conexion para conectarse y tiene un metodo que retornaq si el usuario y el pass ensta en las base

include_once('Conexion.php');

class Usuario {

	private $db;

	 public function __construct(){

		 $this->db = new Conexion();
		 $this->db = $this->db->dbConnect();

		 }



	public function login($name,$pass){
		$devolucion = false;

		$st=$this->db->prepare("select * from usuarios where name=? and pass=?");
		$st->bindParam(1, $name);
		$st->bindParam(2, $pass);
		$st->execute();

		if($st->rowCount()==1) {
				$devolucion = true;
		}

		return $devolucion;
		}



	}
