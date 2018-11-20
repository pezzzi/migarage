<!DOCTYPE html>

<?php

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



?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <title>Formularios</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/registro.css">
</head>
<body>
  <header>
    <?php include('header.php') ?>
  </header>
  <div class="container-fluid background">

    <div class="row header text-center paddingTop">
      <div class="col"><h2>Creá tu cuenta</h2></div>
    </div>

  <div class="row justify-content-center">


    <div class="col-10 col-sm-8 col-lg-6 padding sombra marginBottom paddingTop" style="background-color:white;" onsubmit="return validacion()">

          <form action="registro.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="fullname"><span class="required"> *</span>Nombre y apellido:
              <input type="text" class="form-control" id="name" placeholder="Nombre completo"  name="fullname" value="<?php echo isset($_POST["fullname"]) ? $_POST["fullname"] : ''; ?>">
              <span class="error"> <?php if (isset($validator->erroresRegistro['fullname'])) {echo $validator->erroresRegistro['fullname'];};?> </span>
              </label>
            </div>

            <div class="form-group">
              <label  for="username"><span class="required"> *</span>Nombre de usuario:
              <input  type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">
              <span class="error"> <?php if (isset($validator->erroresRegistro['username'])) {echo $validator->erroresRegistro['username'];};?> </span>
              </label>
            </div>


            <!-- <div class="form-group " >
              <label class="etiqueta">Telefono:
                <br>
                <input type="text" name="userPhone" value="">
              </label>
            </div> -->

            <div class="form-group">
              <label for ="email"><span class="required"> *</span>Email:
              <input type="email" class="form-control" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
              <span class="error"> <?php if (isset($validator->erroresRegistro['email'])) {echo $validator->erroresRegistro['email'];};?> </span>
              </label>
            </div>

            <!-- <div class="form-group">
              <label for="userBirthdate">
                  Fecha de nacimiento:
                  <br>
                  <input type="date" name="userBirthdate" value="">
              </label>
            </div> -->

            <!-- <div class="form-group">
              <label for="userAddress">
                  Direccion:
                  <br>
                  <input type="text" name="userAddress" value="">
              </label>
            </div> -->

            <div class="form-group">
              <label for="password"><span class="required"> *</span>Contraseña:
                <input type="password" class="form-control" name="password"value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
                <span class="error"> <?php if (isset($validator->erroresRegistro['password'])) {echo $validator->erroresRegistro['password'];};?> </span>
              </label>
            </div>

            <div class="form-group">
              <label for="passConfirmation"><span class="required"> *</span>Confirmar contraseña:
                <input type="password" class="form-control" name="passConfirmation">
                <span class="error"> <?php if (isset($validator->erroresRegistro['passConfirmation'])) {echo $validator->erroresRegistro['passConfirmation'];};?> </span>
              </label>
            </div>

            <!-- <div class="form-group">
                <label for="userAvatar">Subi tu Avatar:
                <input type="file" class="form-control" id="userAvatar" name="userAvatar" class="btn" value="">
                <span class="error"> <?php echo $errorAvatar;?> </span>
                </label>
            </div> -->

            <br>

            <div class="">
              <button type="reset" value="Reset" class="btn">Borrar</button>
              <button type="submit" name="" class="btn">Registrate</button>
            </div>

          </form>
      </div>

   </div>

  </div>
     <footer><?php include('footer.php') ?></footer>
</body>
</html>
