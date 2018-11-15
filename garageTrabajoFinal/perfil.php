<?php
  include('autoload.php');
  if ($_POST) {
    $usuarioLog = $base->traerPorEmail($_POST['email']);
    echo $usuarioLog;

  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/perfil.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <?php include('header.php') ?>
    </header>
    <section>
      <div class="row heigth width justify-content-center">

        <div class="profile offset-3 col-10 width">
          <div class="row  box heigth justify-content-center ">
            <h2 class="col-12 centered">Mi Garage</h2>
            <div class="row justify-content-center">

              <div class="col-3 marginTop">
                <img class="profilePic" src="images/emptyProfile.jpg" alt="Profile picture">
              </div>
              <div class="offset-2 col-5 datos heigth">
                <h4>Nombre</h4>
                <p>fullname</p>
                <h4>Nombre de usuario</h4>
                <p>username</p>
                <h4>Fecha de Nacimiento</h4>
                <p>birthdate</p>
                <h4>Email</h4>
                <p>email</p>
                <h4>Telefono</h4>
                <p>phone</p>
                <h4>Direccion</h4>
                <p>address</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <footer>
      <?php include('footer.php') ?>
    </footer>
  </body>
</html>
