<?php
/**
 *
 */

require_once('bd.php');

class Validator {
  private $erroresLogueo=[];
  private $erroresRegistro=[];

  function __construct(){
  }

  public function validarLogIn($juan, $base){
    // foreach ($datos as $key => $value) {
		// 	$datos[$key] = trim($value);
    // }

    if($juan->email==""){
      $this->erroresLogueo['email']="Completa el nombre de usuario";
    } else if(strlen($juan->email) < 3) {
      $this->erroresLogueo['email']='Necesito mas de 3 caracteres';
    } if($base->traerPorEmail($juan->email)==NULL) {
      $this->erroresLogueo['email']='El email no esta en nuestra base';
    }

    $usuario = $base->traerPorEmail($juan->email);

    if($juan->password==""){
      $this->erroresLogueo['contraseña']="Completa la contraseña";
    } else if ($usuario != NULL) {
      if(!password_verify($juan->password, $usuario['password'])) {
        $this->erroresLogueo['password']='La contraseña no verifica';
      }
    }
    var_dump($this->erroresLogueo);
    return $this->erroresLogueo;
}


  public function validarRegistro($juan, $base){
    // foreach ($juan as $key => $value) {
		// 	$juan[$key] = trim($value);
    // }

    if (strlen($juan->username) <= 3) {
			$this->erroresRegistro['username'] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		} else if(!preg_match( '/^\w{5,}$/' , $juan->username)) {
      $this->erroresRegistro['username'] = 'Debe ingresar un nombre válido';
    }

    if($juan->fullname == ''){
      $this->erroresRegistro['fullname'] = 'Debe ingresar su nombre';
    }else if( !preg_match( '/^[a-z ,.\'-]+$/i' , $juan->fullname)){
      $this->erroresRegistro['fullname'] = 'Debe ingresar un nombre válido';
    }

    if($juan->address == '') {
      $this->erroresRegistro['address']='Debe ingresar su dirección';
    }

    // falta pasar de birthdate a edad
		// if ($juan["edad"] < 18) {
		// 	$this-erroresRegistro["edad"] = "Tenes que tener más de 18 años";
    // }

		if ($juan->email == "") {
			$this->erroresRegistro["email"] = "Debe ingresar un email";
		} else if (filter_var($juan->email, FILTER_VALIDATE_EMAIL) == false) {
			$this->erroresRegistro["mail"] = "Debe ingresar un email válido";
		} else if ($base->traerPorEmail($juan->email) != NULL) {
			$this->erroresRegistro["mail"] = "Email existente. Intente otro por favor";
		}

		if ($juan->password == "") {
			$this->erroresRegistro["password"] = "Debe ingresar una contraseña";
		}

		// if ($juan->cpassword == "") {
		// 	$this->erroresRegistro["cpassword"] = "Debe confirmar su contraseña";
		// }
    //
		// if ($juan->password != "" && $juan->cpassword != "" && $juan->password != $juan->cpassword) {
		// 	$this->erroresRegistro["password"] = "Las contraseñas no coinciden";
    // }
    var_dump($this->erroresRegistro);
    return $this->erroresRegistro;
  }


}
