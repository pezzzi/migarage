<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <title>Mi Garage</title>
  </head>
  <body>
    <?php include('provincias.php') ?>
    <div class="container-fluid">
      <header>
        <?php include('header.php') ?>
      </header>
      <section>
        <article class="main">
          <div class="justify-content-center row searchFilter">
            <div class="col-5">
              <form class="" action="home.php" method="get">
                <select class="homeMain" name="provincias">
                  <?php foreach ($provincias as $provincia) {
                    ?>
                      <option value="<?php echo $provincia['data'] ?>"><?php echo $provincia['name']; ?></option>
                  <?php
                  } ?>
                </select>
                <select class="" name="localidades">
                  <option value="laPlata">La Plata
                  <option value="CABA">CABA</option>
                </select>
                <label class="navBarRadio">
                  <p class="formP">Tipo de vehiculo</p>
                  <input type="radio" name="vehicle" value="auto"><span class="vehicleType">Auto</span>
                  <input type="radio" name="vehicle" value="camion"><span class="vehicleType">Camion</span>
                  <input type="radio" name="vehicle" value="camioneta"><span class="vehicleType">Camioneta</span>
                  <input type="radio" name="vehicle" value="moto"><span class="vehicleType">Moto</span>
                </label>
                <br>
                <input type="submit" name="buscar" value="Buscar">
              </form>
            </div>
          </div>
        </article>
      </section>
      <footer>
        <?php include('footer.php') ?>
      </footer>
    </div>
  </body>
</html>
