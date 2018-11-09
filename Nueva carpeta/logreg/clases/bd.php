<?php
/**
 *
 */
class bd
{
  private $dns="mysql:host=localhost;dbname=usuarios";
  private $user="root";
  private $password="";
  private $opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
  private $conex;
  function __construct()
  {
    try {
      $this -> conex= new PDO($this->dns, $this->user, $this->password, $this->opt);
    } catch (PDOException $ex) {
      echo 'Error'.$ex->getMessage();
    }

  }

  public function guardarUsuario(Usuarios $usuario){
    $query = $this->conex->prepare('INSERT INTO usuario(username, edad ,telefono,avatar,email) VALUES(:username, :edad ,:telefono,:avatar,:email)');

    $query->bindvalue(':username', $usuario->getUsername() );
    $query->bindvalue(':edad', $usuario->getEdad() );
    $query->bindvalue(':telefono', $usuario->getTelefono() );
    $query->bindvalue(':avatar', $usuario->getAvatar() );
    $query->bindvalue(':email', $usuario->getEmail() );

    $query->execute();
    $id = $this->conex->lastInsertId();
    $usuarios->setId();
    return $usuario;
  }


  public function traerPorEmail($email){
    $query=$this->conex->prepare('SELECT * FROM usuarios WHERE email=:email');
    $query->bindValue(":email", $email);
    $query->execute();
    $usuario= $query->fetch();
    return $usuario;
  }


  public function traerTodos(){
    $query=$this->conex->query("SELECT * FROM usuario");
    $usuarios =$query->fetchAll(PDO::FETCH_OBJ);
    return $usuarios;
  }
}
