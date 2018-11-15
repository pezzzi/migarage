<?php
/**
 *
 */

require_once('bd.php');

class Validator {
  public $erroresLogueo=[];
  public $erroresRegistro=[];

  function __construct(){
  }

  public function validarLogIn($datos, $base){
    // foreach ($datos as $key => $value) {
		// 	$datos[$key] = trim($value);
    // }

    if($datos['email']==""){
      $this->erroresLogueo['email']="Completa el nombre de usuario";
    } else if(strlen($datos['email']) < 3) {
      $this->erroresLogueo['email']='Necesito mas de 3 caracteres';
    } if($base->traerPorEmail($datos['email'])==NULL) {
      $this->erroresLogueo['email']='El email no esta en nuestra base';
    }

    $usuario = $base->traerPorEmail($datos['email']);

    if($datos['password']==""){
      $this->erroresLogueo['contraseña']="Completa la contraseña";
    } else if ($usuario != NULL) {
      if(!password_verify($datos['password'], $usuario['password'])) {
        $this->erroresLogueo['password']='La contraseña no verifica';
      }
    }
    return $this->erroresLogueo;
}


  public function validarRegistro($user, $base){
    // foreach ($juan as $key => $value) {
		// 	$juan[$key] = trim($value);
    // }
    var_dump($user->password);
    var_dump($user->passConfirmation);

    if (strlen($user->username) <= 3) {
			$this->erroresRegistro['username'] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		} else if(!preg_match( '/^\w{5,}$/' , $user->username)) {
      $this->erroresRegistro['username'] = 'Debe ingresar un nombre válido';
    }

    if($user->fullname == ''){
      $this->erroresRegistro['fullname'] = 'Debe ingresar su nombre';
    }else if( !preg_match( '/^[a-z ,.\'-]+$/i' , $user->fullname)){
      $this->erroresRegistro['fullname'] = 'Debe ingresar un nombre válido';
    }

    // if($user->address == '') {
    //   $this->erroresRegistro['address']='Debe ingresar su dirección';
    // }

    // falta pasar de birthdate a edad
		// if ($juan["edad"] < 18) {
		// 	$this-erroresRegistro["edad"] = "Tenes que tener más de 18 años";
    // }

		if ($user->email == "") {
			$this->erroresRegistro["email"] = "Debe ingresar un email";
		} else if (filter_var($user->email, FILTER_VALIDATE_EMAIL) == false) {
			$this->erroresRegistro["mail"] = "Debe ingresar un email válido";
		} else if ($base->traerPorEmail($user->email) != NULL) {
			$this->erroresRegistro["mail"] = "Email existente. Intente otro por favor";
		}

		if ($user->password == "") {
			$this->erroresRegistro["password"] = "Debe ingresar una contraseña";
		}

		if ($user->passConfirmation == "") {
			$this->erroresRegistro["passConfirmation"] = "Debe confirmar su contraseña";
		}

		if (!password_verify($user->passConfirmation, $user->password)) {
			$this->erroresRegistro["password"] = "Las contraseñas no coinciden";
    }
    return $this->erroresRegistro;
  }


}
