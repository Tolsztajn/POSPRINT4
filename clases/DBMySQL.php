<?php

require_once("db.php");
require_once("usuario.php");

class DBMySQL extends DB {
  private $db;

  public function __construct() {
    $dsn = 'mysql:host=localhost;dbname=hoteles_db;
    charset=utf8mb4;port=3306';
    $user ="root";
    $pass = "root";

    try {
      $this->db = new PDO($dsn, $user, $pass);
    } catch (Exception $e) {
      echo "La conexion a la base de datos falló: " . $e->getMessage();
    }

  }

  public function guardarUsuario(Usuario $usuario) {

		$query = $this->db->prepare("Insert into usuario_test values(default, :nombre, :surname,:telefono,:mail,:password)");

		$query->bindValue(":nombre", $usuario->getNombre());
		$query->bindValue(":surname", $usuario->getSurname());
		$query->bindValue(":telefono", $usuario->getTelefono());
		$query->bindValue(":mail", $usuario->getMail());
		$query->bindValue(":password", $usuario->getPassword());

		$id = $this->db->lastInsertId();
		$usuario->setId($id);

		$query->execute();

		return $usuario;
  }
  public function traerTodos() {
		$query = $this->db->prepare("Select * from usuarios");
		$query->execute();

    $arrayFinal = [];

		$usuarios = $query->fetchAll();

    foreach ($usuarios as $usuario) {
      $arrayFinal[] = new Usuario($usuario);
    }

    return $arrayFinal;
  }
  public function traerPorMail($mail) {
		$query = $this->db->prepare("Select * from usuarios where mail = :mail");
		$query->bindValue(":mail", $mail);

		$query->execute();

		$usuario = $query->fetch();

    if ($usuario != null) {
      return new Usuario($usuario);
    }
    else {
      return null;
    }
  }
}

?>
