<?php
/**
 *
 */

require_once('bd.php');

class Validator
{
  private $errores=[];
  
  function __construct()
  {

  }

  public function validarLogIn($datos){
    foreach ($datos as $key => $value) {
			$datos[$key] = trim($value);
    }
    
    if($datos['email']==""){
      $this->errores['email']="Completa el nombre de usuario";
    }
    else if(strlen($datos['email']) < 3) {
      $this->errores['email']='Necesito mas de 3 caracteres';
    }
    if($bd->traerPorMail($datos['email'])==NULL) {
      $this->errores['email']='El email no esta en nuestra base';
    }

    $usuario = $bd->traerPorMail($datos["email"]);

    if($datos['pass']==""){
      $this->errores['contraseña']="Completa la contraseña";
    } else if ($usuario != NULL) {
      if(password_verify($datos['password'], $usuario->getPassword()) == false) {
        $this->errores['password']='La contraseña no verifica';
      }
    }
    return $this->errores;
}


  public function validarRegistro($juan){
    // foreach ($juan as $key => $value) {
		// 	$juan[$key] = trim($value);
    // }

    if (strlen($juan->username) <= 3) {
			$errores['username'] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		} else if(!preg_match( '/^\w{5,}$/' , $juan->username)) {
      $errores['username'] = 'Debe ingresar un nombre válido';
    }

    if($juan->fullname == ''){
      $errores['fullname'] = 'Debe ingresar su nombre';
    }else if( !preg_match( '/^[a-z ,.\'-]+$/i' , $juan->fullname)){
      $errores['fullname'] = 'Debe ingresar un nombre válido';
    }

    if($juan->address == '') {
      $errores['address']='Debe ingresar su dirección';
    }

    // falta pasar de birthdate a edad
		// if ($juan["edad"] < 18) {
		// 	$errores["edad"] = "Tenes que tener más de 18 años";
    // }
    
		if ($juan->email == "") {
			$errores["email"] = "Debe ingresar un email";
		} else if (filter_var($juan->email, FILTER_VALIDATE_EMAIL) == false) {
			$errores["mail"] = "Debe ingresar un email válido";
		} else if ($bd->traerPorMail($juan->email) != NULL) {
			$errores["mail"] = "Email existente. Intente otro por favor";
		}

		if ($juan->password == "") {
			$errores["password"] = "Debe ingresar una contraseña";
		}

		if ($juan->cpassword == "") {
			$errores["cpassword"] = "Debe confirmar su contraseña";
		}

		if ($juan->password != "" && $juan->cpassword != "" && $juan->password != $juan->cpassword) {
			$errores["password"] = "Las contraseñas no coinciden";
    }
    
    return $this->errores;
  }


}
