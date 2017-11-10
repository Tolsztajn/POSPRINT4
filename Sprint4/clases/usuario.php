<?php


class Usuario {

  private $name;
  private $surname;
  private $telefono;
  private $mail;
  private $password;
  private $db;

<<<<<<< HEAD
  function _construct($name, $surname, $telefono, $mail,$password){

   $this->name = $name;
   $this->surname = $surname;
   $this->telefono = $telefono;
   $this->mail = $mail;
   $this->password = $this->setPassword($password);

   $this->db = new PDO("mysql:host=localhost;dbname=usuario_test","root","root");
   $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

  public function setPassword($value){
=======
public function __construct($datos) {
    if (isset($datos["name"])) {
      $this->name = $datos["name"];
      $this->password = $datos["password"];
    }
    else {
      $this->password = password_hash($datos["password"], PASSWORD_DEFAULT);
    }
>>>>>>> bace41c5d14c2b522bdaba81d27ca6895999da41

    $this->surname = $datos["surname"];
    $this->telefono = $datos["telefono"];
    $this->mail = $datos["mail"];

  }

  public function guardarImagen() {
    $nombre=$_FILES["avatar"]["name"];
    $archivo=$_FILES["avatar"]["tmp_name"];

    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = "img/" . $this->getMail() . "." . $ext;

    move_uploaded_file($archivo, $miArchivo);
  }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Surname
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of Surname
     *
     * @param mixed surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of Telefno
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefno
     *
     * @param mixed telefno
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of Mail
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of Mail
     *
     * @param mixed mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of Db
     *
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set the value of Db
     *
     * @param mixed db
     *
     * @return self
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

}



 ?>
