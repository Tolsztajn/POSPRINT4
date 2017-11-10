<?php

class Usuario {
  private $id;
  private $email;
  private $password;
  private $edad;
  private $pais;
  private $username;

  public function __construct($datos) {
    if (isset($datos["id"])) {
      $this->id = $datos["id"];
      $this->password = $datos["password"];
    }
    else {
      $this->password = password_hash($datos["password"], PASSWORD_DEFAULT);
    }

    $this->email = $datos["email"];
    $this->username = $datos["username"];
    $this->pais = $datos["pais"];
    //$this->telefono = $datos["telefono"];
  }

  public function guardarImagen() {
		$nombre=$_FILES["avatar"]["name"];
		$archivo=$_FILES["avatar"]["tmp_name"];

		$ext = pathinfo($nombre, PATHINFO_EXTENSION);

		$miArchivo = "img/" . $this->getEmail() . "." . $ext;

		move_uploaded_file($archivo, $miArchivo);
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setPassword($password) {
    $this->password = $password;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPais($pais) {
    $this->pais = $pais;
  }

  public function getPais() {
    return $this->pais;
  }

  public function setEdad($edad) {
    $this->edad = $edad;
  }

  public function getEdad() {
    return $this->edad;
  }

  public function setUsername($username) {
    $this->username = $username;
  }

  public function getUsername() {
    return $this->username;
  }


}

?>
