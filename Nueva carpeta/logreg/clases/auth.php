<?php

class auth
{
  public function __construct(){
    session_start();
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
    setcookie('logueado',NULL,time()-1);
    session_destroy();
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
