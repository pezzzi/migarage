<?php
$dsn = 'mysql:host=localhost;dbname=migarage_db';
$user = 'root';
$pass = 'root';
$opt= [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

try{

    $conex = new PDO($dsn, $user, $pass, $opt);


}catch( PDOException $ex ){

    echo 'El error es:'. $ex->getMessage();
}
