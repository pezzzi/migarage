<?php
include("autoload.php");
try {
  $auth->logOut();
  header("location: index.php");
} catch(Exception  $err) {
    var_dump($err);
}
?>
