<?php
include_once('clases/auth.php');
include_once('clases/bd.php');
include_once('clases/usuarios.php');
include_once('clases/validation.php');

$base = new bd();
$auth  = new Auth();
$validator = new Validator();
