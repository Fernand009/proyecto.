<!DOCTYPE html>
<html>
  <head>
   <?php require 'parcials/header.php' ?>
    <meta charset="utf-8">
    <title>Iniciar seción</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>


     <h1>Iniciar sesión</h1>
     <span> o <a href="signup.php">Signup</a></span>
    <form action="login.php" method="post">
     <input type="text" name="email" placeholder="Ingrese su Email">
     <input type="contraseña" name="contraseña" placeholder="Ingrese su Contraseña">
     <input type="submit" value="Enviar">
    </form>
  </body>
</html>
