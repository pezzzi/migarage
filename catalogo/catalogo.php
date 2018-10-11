<pre>
<?php

$dsn = 'mysql:host=localhost;dbname=movies_db';
$user = 'juancarlos';
$pass = '123456';
$opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try{

    $conex = new PDO($dsn, $user, $pass, $opt);

    $query = $conex->query('SELECT * FROM movies');

    $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);

    var_dump($peliculas[0]['title']);

    // var_dump($conex);

}catch( PDOException $ex ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
    echo 'El error es:'. $ex->getMessage();
}

// echo '<br>Sigo por aqui';





 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../home/css/css/bootstrap.css">
    <link rel="stylesheet" href="../home/css/styles.css">
    <link rel="stylesheet" href="css/scatalogo.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include('../home/header.php') ?>

    <section>
      <article class="main">
        <div class="row">
          <div class="col-8">

          </div>

        </div>

      </article>
    </section>
  </body>
</html>
