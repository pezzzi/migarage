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
    <header>
      <?php include('header.php') ?>
    </header>
      <section>
        <article class="mainHome">
          <div class="row justify-content-center searchFilter marginRight">
            <div class="col-5">
              <h2 class="hHome">Busca un garage</h2>
              <form class="" action="../catalogo/catalogo.php" method="get">
                <select class="homeMain" name="provincias">
                  <option disabled selected value>--Provincia--</option>
                  <?php foreach ($provincias as $provincia) {
                    ?>
                      <option value="<?php echo $provincia['data'] ?>"><?php echo $provincia['name']; ?></option>
                  <?php
                  } ?>
                </select>
                <select class="" name="localidades">
                  <option disabled selected value>--Localidad--</option>
                  <option value="laPlata">La Plata
                  <option value="CABA">CABA
                </select>

                <label class="navBarRadio">
                  <p class="formP">Tipo de vehiculo</p>
                  <input type="radio" name="vehicle" value="auto">Auto
                  <input type="radio" name="vehicle" value="camion">Camion
                  <input type="radio" name="vehicle" value="camioneta">Camioneta
                  <input type="radio" name="vehicle" value="moto">Moto
                </label>
                <br>
                <p>Tiempo de estadia</p>
                  <div class="col-2 centered">
                     <input class="block" type="text" name="estadia" value="">
                  </div>
                    <div class="col-2 block">
                      <select class="block" name="tiempo">
                          <option value="hs">Hora</option>
                          <option value="day">Dia</option>
                          <option value="month">Mes</option>
                      </select>
                    </div>
                </div>
                <input class="floatL" type="submit" name="buscar" value="Buscar">
              </form>
            </div>
          </div>
        </article>
      </section>
    </div>
    <footer>
      <?php include('footer.php') ?>
    </footer>

  </body>
</html>
