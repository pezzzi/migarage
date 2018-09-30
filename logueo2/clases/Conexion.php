<?php

// esta clase se encarga de conectar a la base test sin contraseña

class Conexion {


	public function dbConnect() {

		return new PDO('mysql:host=localhost;dbname=test', "root", "");

		}


	}
