<?php
include_once('autoload.php');
$juan=new Usuarios("juancito@gmail.com","mipass","juan",'2018-07-05', "98765478", 'Gabriel Toledo', 'Lima');
$base->guardarUsuario($juan);
// $auth=logOut();
$validator->validarRegistro($juan, $base);
$validator->validarLogIn($juan, $base);
$auth->loguear('juancito@gmail.com');
if ($auth->estaLogueado()){
  $nombre = $auth->usuarioLogueado($base);
  echo "bienvenido".$nombre['username'];
}
else {
  echo 'logueate por favor';
}
