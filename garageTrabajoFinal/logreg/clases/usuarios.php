<?php
/**
 *
 */
class Usuarios {
  public $id;
  public $email ;
  public $password;
  public $username;
  public $birthdate;
  public $phone;
  public $avatar;
  public $address;
  public $fullname;


  function __construct($email, $password, $username, $fullname, $id=null) {
    if($id == null) {
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    } else {
      $this->password = $password;
    }
    $this->id=$id;
    $this->email=$email;
    $this->username=$username;
    $this->fullname=$fullname;
  }


  //GETTERS
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }
  public function getUsername(){
    return $this->username;
  }
  public function getBirthdate(){
    return $this->birthdate;
  }
  public function getPhone(){
    return $this->phone;
  }
  public function getAvatar(){
    return $this->avatar;
  }
  public function getId(){
    return $this->avatar;
  }

  public function getFullname(){
    return $this->fullname;
  }

  public function getAddress(){
    return $this->address;
  }



  //SETTERS
  public function setEmail($email){
    $this->email=$email;
  }
  public function setPassword($password){
    $this->password=$password;
  }
  public function setUsername($username){
    $this->username=$username;
  }
  public function setBirthdate($birthdate){
    $this->birthdate=$birthdate;
  }
  public function setPhone($phone){
    $this->phone=$phone;
  }
  public function setAvatar($avatar){
    $this->avatar=$avatar;
  }
  public function setID($id){
    $this->id=$id;
  }

  public function setFullname($fullname){
    $this->fullname=$fullname;
  }

  public function setAddress($address){
    $this->address=$address;
  }


// public function guardarImagen($email) {
//
//   if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
//   {
//
//     $nombre=$_FILES["avatar"]["name"];
//     $archivo=$_FILES["avatar"]["tmp_name"];
//
//     $ext = pathinfo($nombre, PATHINFO_EXTENSION);
//
//     if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
//       return "Error";
//     }
//
//     $miArchivo = dirname(__FILE__);
//     $miArchivo = $miArchivo . "/../img/";
//     $miArchivo = $miArchivo . $this->getEmail() . "." . $ext;
//
//     move_uploaded_file($archivo, $miArchivo);
//   }
// }

}
