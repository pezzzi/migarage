<?php
/**
 *
 */
class bd
{
  private $dns="mysql:host=localhost;dbname=migarage_db;
  charset=utf8mb4;port=3306";
  private $user="root";
  private $password="root";
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
    $query = $this->conex->prepare('INSERT INTO usuarios(username, birthdate , phone, email, address, fullname, password) VALUES(:username, :birthdate ,:phone,:email, :address, :fullname, :password)');

    $query->bindValue(':username', $usuario->getUsername() );
    $query->bindValue(':birthdate', $usuario->getBirthdate() );
    $query->bindValue(':phone', $usuario->getPhone() );
    // $query->bindValue(':avatar', $usuario->getAvatar() );
    $query->bindValue(':email', $usuario->getEmail() );
    $query->bindValue(':fullname', $usuario->getFullname() );
    $query->bindValue(':address', $usuario->getAddress() );
    $query->bindValue(':password', $usuario->getPassword() );

    $query->execute();
    $id = $this->conex->lastInsertId();
    $usuario->setId($id+1);
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
