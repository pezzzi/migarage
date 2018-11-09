<?php
/**
 *
 */
class usuarios
{
  protected $id;
  protected $email ;
  protected $password;
  protected $username;
  protected $edad;
  protected $telefono;
  protected $avatar;


  function __construct($id,$email,$password,$username,$edad,$telefono,$avatar)
  {
    $this->id=$id;
    $this->email=$email;
    $this->password=$password;
    $this->username=$username;
    $this->edad=$edad;
    $this->telefono=$telefono;
    $this->avatar=$avatar;
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
  public function getEdad(){
    return $this->edad;
  }
  public function getTelefono(){
    return $this->telefono;
  }
  public function getAvatar(){
    return $this->avatar;
  }
  public function getId(){
    return $this->avatar;
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
  public function setEdad($edad){
    $this->edad=$edad;
  }
  public function setTelefono($telefono){
    $this->telefono=$telefono;
  }
  public function setAvatar($avatar){
    $this->avatar=$avatar;
  }
  public function setID($id){
    $this->id=$id;
  }
}
