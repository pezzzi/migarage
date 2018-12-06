@extends('layouts.default')

@section('main')
<?php
/*
include('autoload.php');

if ($_POST) {
  $datos = [];
  $datos['fullname'] = $_POST['fullname'];
  $datos['username'] = $_POST['username'];
  $datos['email'] = $_POST['email'];
  $datos['password'] = $_POST['password'];
  $datos['passConfirmation'] = $_POST['passConfirmation'];

  $user = new Usuarios($datos['email'], $datos['password'], $datos['username'], $datos['fullname']);
  $user->setPassConfirmation($datos['passConfirmation']);
  $validator->validarRegistro($user, $base);
  if ($validator->erroresRegistro == []) {
    $base->guardarUsuario($user);
    header('Location: login.php?');
  }
}

// $errorName = '';
// $errorUsername='';
// $errorPass='';
// $errorEmail='';
// $errorConfirmation='';
// $errorAvatar='';
//
// if($_POST){
//
//   $_POST['name']=trim($_POST['name']);
//   $_POST['userName']=trim($_POST['userName']);
//   $_POST['userPass']=trim($_POST['userPass']);
//   $_POST['userPassConfirmation']=trim($_POST['userPassConfirmation']);
//   $_POST['userEmail']=trim($_POST['userEmail']);
//
//   if( empty($_POST['name']) ){
//     $errorName = 'Debe ingresar el nombre';
//   }else if( !preg_match( '/^[a-z ,.\'-]+$/i' , $_POST['userName'])){
//     $errorName = 'Debe ingresar un nombre válido';
//   }
//
//   if( empty($_POST['userName']) ){
//     $errorUsername = 'Debe ingresar un nombre de usuario';
//   }else if( !preg_match( '/^\w{5,}$/' , $_POST['userPass'])){
//     $errorUsername = 'El nombre de usuario debe contener al menos 5 caracteres alfanúmericos';
//   }
//
//   if( empty($_POST['userPass']) ) {
//     $errorPass = 'Debe ingresar una contraseña';
//   } else if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $_POST['userPass'])) {
//     $errorPass = 'La contraseña debe contener al menos 8 caracteres, una letra y un número';
//   }
//
//   if ( $_POST['userPass'] !== $_POST['userPassConfirmation'] ) {
//     $errorConfirmation = 'Las contraseñas deben ser iguales';
//   }
//
//   if( empty($_POST['userEmail']) ){
//       $errorEmail = 'Debe ingresar el Correo';
//     }else if (filter_var( $_POST['userEmail'] , FILTER_VALIDATE_EMAIL )===false) {
//       $errorEmail = 'El Correo es inválido';
//     }
//
//   if( $_FILES['userAvatar']['error'] === 0 ){
//     $ext = pathinfo($_FILES['userAvatar']['name'], PATHINFO_EXTENSION);
//     if( $ext == 'jpg' ||  $ext == 'png' ||  $ext == 'webp' ){
//       move_uploaded_file($_FILES['userAvatar']['tmp_name'], 'images/'.$_POST['username'].'.'.$ext);
//     }else{
//       $errorAvatar = 'El Formato es inválido';
//     }
//   }
//
//   if($errorName=='' && $errorUsername=='' &&  $errorPass=='' && $errorEmail=='' && $errorConfirmation=='' && $errorAvatar==''){
//       var_dump($_POST);
//       try {
//         $db = new PDO ('mysql:host=localhost;dbname=migarage', 'root', 'root', [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]);
//         $insert = $db->prepare('INSERT INTO usuarios (fullname, username, password, email, phone, birthdate, address) VALUES (:fullname, :username, :password, :email, :phone, :birthdate, :address)');
//         $insert->bindValue(':fullname', $_POST['name']);
//         $insert->bindValue(':username', $_POST['userName']);
//         $insert->bindValue(':password', $_POST['userPass']);
//         $insert->bindValue(':email', $_POST['userEmail']);
//         $insert->bindValue(':phone', $_POST['userPhone']);
//         $insert->bindValue(':birthdate', $_POST['userBirthdate']);
//         $insert->bindValue(':address', $_POST['userAddress']);
//         $insert->execute();
//       } catch (PDOException $ex) {
//         echo 'El error es:'. $ex->getMessage();
//       }
//     }
//       //header('Location: datosUser.php');
//       //exit;
//    }


*/
?>

<body>
  <header>
    <?php/* include('header.php')*/ ?>
  </header>
  <div class="container-fluid background">

    <div class="row header text-center paddingTop">
      <div class="col"><h2>Creá tu cuenta</h2></div>
    </div>

  <div class="row justify-content-center">


    <div class="col-10 col-sm-8 col-lg-6 padding sombra marginBottom paddingTop" style="background-color:white;" onsubmit="return validacion()">

      <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group row">
              <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

              <div class="col-md-6">
                  <input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

                  @if ($errors->has('fullname'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('fullname') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

              <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
              </div>
          </div>
      </form>
      </div>

   </div>

 </div>

 <script type="text/javascript">
 fetch('https://restcountries.eu/rest/v2/all')
 .then(function(response) {
   return response.json();
 })
 .then(function(data) {
   var countrySelect = document.querySelector('#countryForm');
   data.forEach(function(item) {
     countrySelect.innerHTML += '<option>'+item['name']+'</option>';
   });
 })
 .catch(function(error) {
   console.log('The error was: '+error);
 })
 </script>
</body>
@endsection
