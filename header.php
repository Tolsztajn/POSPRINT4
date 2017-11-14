<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,900');
    </style>
    <title>We Love to Travel</title>
  </head>
  <body>
    <div class="contenedor"> <!-- Contenedor principal -->
      <header> <!-- Encabezado logo +  menu -->
        <div class="first-nav">
          <a href="inicio.php"><img src="img/logo-1.svg" alt="logo wt" class="logo1"></a>
          <img src="img/menu.svg" alt="" class="menu-button">
          <nav class="second-nav">
            <ul>
              <li><a href="#">HABITACIONES</a></li>
              <li><a href="#">DEPARTAMENTOS</a></li>
              <li><a href="#">CASAS ENTERAS</a></li>
              <li><a href="#">HOSTELS</a></li>
            </ul>
          </nav>
          <nav class="login">
            <ul>
              <li><a href="login.php">LOGIN</a></li>
              <?php if (isset($_SESSION["usuario"])):?>
              <li><a href="#">¡Bienvenido <?php echo $_SESSION["usuario"]; ?>!</a></li>
              <li> <a href="logout.php">logout</a></li>
            <?php endif?>
            </ul>
          </nav>
        </div>
      </header>
<!-- main content-->
      <div class="contenedor">
        <div class="row">
          <div class="col-lg-12">
