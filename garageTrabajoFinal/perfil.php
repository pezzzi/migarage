<?php
  include('autoload.php');

  if ($_SESSION) {
    $user=$auth->usuarioLogueado($base);
  }

  if (!isset($user)) {
    header("location: index.php");
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/perfil.css">
      <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Garage</title>
  </head>
  <body>
    <header>
      <?php include('header.php') ?>
    </header>
    <section>
      <div class="row heigth width justify-content-center perfil">

        <div class="profile offset-3 col-10 width">
          <div class="row  box heigth justify-content-center ">
            <h2 class="col-12 centered"><?php echo $user['fullname'] ?></h2>
            <div class="row justify-content-center">
              <div class="col-lg-3 col-xs-12 col-sm-12">
                <img class="profilePic" width="100%" src="images/emptyProfile.jpg" alt="Profile picture">
              </div>
              <div class="offset-lg-2 col-xs-12 col-md-12 col-sm-12 col-lg-5 datos heigth">
                <form class="" action="modificarPerfil.php" method="post">
                  <h4>Nombre de usuario</h4>
                  <p><?php echo $user['username'] ?></p>
                  <h4>Fecha de Nacimiento</h4>
                  <p>
                    <?php
                      if ($user['birthdate']) {
                        echo $user['birthdate'];
                      } else {
                        echo "No tiene fecha de nacimiento";
                    }?>
                  <p>
                  <h4>Email</h4>
                  <p><?php echo $user['email'] ?></p>
                  <h4>Telefono</h4>
                  <p>
                    <?php
                      if ($user['phone']) {
                        echo $user['phone'];
                      } else {
                        echo "No tiene numero telefonico";
                      }?>
                  </p>
                  <h4>Direccion</h4>
                  <p>
                    <?php
                      if ($user['address']) {
                        echo $user['address'];
                      } else {
                        echo "No tiene direccion";
                      }?>
                  </p>

                  <!--<button class="uploadButton" type="button" name="">Modificar</button>-->
                </form>
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
