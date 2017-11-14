<?php

include_once("soporte.php");

if ($auth->estaLogueado()) {
  header("Location:inicio.php");exit;
}

$errores = [];
if ($_POST) {
  $errores = $validador->validarLogin($_POST, $db);
  if (count($errores) == 0) {
    // LOGUEAR
    $auth->loguear($_POST["mail"]);
    if (isset($_POST["recordame"])) {
      //Quiere que lo recuerde
      $auth->recordame($_POST["mail"]);
    }
    header("Location:inicio.php");
  }
}

include("header.php"); ?>

<body>
<div class="form">
<header> <!-- Encabezado logo + menu -->

<?php if (count($errores)>0) { ?>
                  <div class="alert alert-danger">
                      <ul class="errores">
                      <?php foreach ($errores as $error) : ?>
                        <li>
                          <?=$error?>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                </div>
              <?php } ?>

<form class="form" action="login.php" method="POST">
    <h2 class="login-title">LOGIN</h2>
    <div class="">
      <label for="" class="login-subtitle">Usuario</label>
      <input type= "text" class="form-control" placeholder="Usuario" name="name">
    </div>
    <div class="">
      <label for="" class="login-subtitle">Email</label>
      <input type= "mail" class="form-control" placeholder="Mail" name="mail">
    </div>
    <div class="">
      <label class="login-subtitle">Contraseña</label>
      <input type="password" class="form-control" placeholder="&#128272;Contraseña" name="password">
    </div>
    <div class="">
      <label for="" class="login-box">
        <input type="checkbox" name="Recordarme" value="recordarme">Recordarme
      </label>
    </div>
    <button type="submit" name="button" class="btn btn-default">Ingresar</button>
    <ul class="subinfo">
      <li><a href="#">Olvide mi contraseña</a></li>
      <li><a href="register.php">Crear usuario</a></li>
    </ul>
  </form>
</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</body>

<?php include("footer.php"); ?>
