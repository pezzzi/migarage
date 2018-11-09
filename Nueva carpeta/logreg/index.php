<?php
include_once('autoload.php');
$juan=new Usuarios("1","juancito@gmail.com","mipass","juan",19,"juan.jpg", "987654");
//$base->guardarUsuario($juan);
//$auth=logOut();
//$validator->validarLogIn($_POST);
//$validator->validarRegistro($_POST);
$authe->loguear('juancito@gmail.com');
if ($authe->estaLogueado()){
  $nombre = $authe->usuarioLogueado($base);
  echo "bienvenido".$nombre->getUsername();
}
else {
  echo 'logueate por favor';
}
