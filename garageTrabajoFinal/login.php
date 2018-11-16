<!DOCTYPE html>

<?php
include('autoload.php');

if ($_POST) {
  $datos = [];
  $datos['email'] = $_POST['email'];
  $datos['password'] = $_POST['password'];


  $validator->validarLogIn($datos, $base);
  if ($validator->erroresLogueo == []) {
    $auth->loguear($datos['email']);
    header('Location: perfil.php?');
  }

}

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/logIn.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include('header.php') ?>
  <div class="container-fluid heigth">

     <div class="row header text-center">
       <div class="col"><h2>Ingrese a su cuenta</h2></div>
     </div>

     <div class="row height">

       <div class="col-1 col-sm-2 col-lg-4 height" >

       </div>

       <div class="col-10 col-sm-8 col-lg-4 padding sombra marginBottom marginTop height" style="background-color:white;" onsubmit="return validacion()">
         <form action="login.php" method="post">

             <div class="form-group">
               <label for="usuario" >Ingresa tu email</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
             </div>

             <div class="form-group">
               <label for="password1">Ingresa tu Contraseña</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
             </div>

              <div class="olvido">
                <a href="#">Te olvidaste tu contraseña?</a>
              </div>

             <button type="submit" class="btn">Ingresa</button>

         </form>
       </div>

       <div class="col-1 col-sm-2 col-lg-4">

       </div>

     </div>



  </div>
     <footer><?php include('footer.php') ?></footer>
  </body>

</html>
