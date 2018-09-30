<?php
include_once('clases/Conexion.php');
include_once('clases/Usuario.php');


  $nombre = $_POST['usuario'];
  $contrasena = $_POST['password1'];


  $object = new Usuario;

  if( $object->login($nombre,$contrasena) ){
		header("Location: exito.php?");
  }else{
		header("Location: fracaso.php?");

  };



?>
