<?php
/**
 *
 */
class validator
{
  private $errorer=[];
  function __construct()
  {

  }

  public function validarLogIn($datos){
    if($datos['email']==""){
      $this->errores['email']="completa el email";
    }
    else if(strlen($datos['email'])) {
      $this->errores['email']='necesito mas de 3 caracteres';

    }

  if($datos['pass']==""){
    $this->errores['contraseña']="completa la contraseña";
  }
      return $this->errores;
}


  public function validarRegistro($datos){

  }


}
