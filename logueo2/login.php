<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../home/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php include('../home/header.php') ?>
  <div class="container">

     <div class="row header text-center">
       <div class="col"><h2>Ingrese a su cuenta</h2></div>
     </div>

     <div class="row">

       <div class="col-1 col-sm-2 col-lg-4" >

       </div>

       <div class="col-10 col-sm-8 col-lg-4 padding sombra marginBottom paddingTop" style="background-color:white;" onsubmit="return validacion()">
         <form action="loginProceso.php" method="post">

             <div class="form-group">
               <label for="usuario" >Ingresa tu usuario</label>
               <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nombre de usuario" required>
             </div>

             <div class="form-group">
               <label for="password1">Ingresa tu Password</label>
               <input type="password" class="form-control" id="password1" name="password1" placeholder="Contraseña" required>
             </div>

              <div class="olvido">
                <a href="#">Te olvidaste tu password?</a>
              </div>

             <button type="submit" class="btn">Ingresa</button>

         </form>
       </div>

       <div class="col-1 col-sm-2 col-lg-4">

       </div>

     </div>



  </div>
     <footer><?php include('../home/footer.php') ?></footer>
  </body>

</html>
