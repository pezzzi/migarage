<?php

class Auth
{
  public function __construct(){
    session_start();

    if (!isset($_SESSION["logueado"]) && isset($_COOKIE["logueado"])) {
			$_SESSION["logueado"] = $_COOKIE["logueado"];
		}
  }

  public function loguear($email){
    $_SESSION['logueado']=$email;
  }

  public function estaLogueado(){
    return isset($_SESSION['logueado']);
  }

  public function remember($email){
    setcookie('logueado',$email,time()+3600);
  }

  public function logOut(){
    session_destroy();
    setcookie('logueado',NULL,time()-1);
  }

  public function usuarioLogueado($base){
    if($this->estaLogueado()){
      $logueado=$base->traerPorEmail($SESSION['logueado']);
      return $logueado;
    }else{
      return NULL;
    }
  }
}
