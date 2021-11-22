<?php
 include("database");
 if ($conexion) {
   echo "todo correcto"
 }
?>

<!DOCTYPE html>
<html>
  <head>
   <?php require 'parcials/header.php' ?>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>


<h1>Registrarse</h1>
<span> o <a href="login.php">Login</a></span>


<form action="signup.php" method="POST">
     <input type="text" name="email" placeholder="Ingrese su Email">
     <input type="contraseña" name="contraseña" placeholder="Ingrese su Contraseña">
     <input type="contraseña" name="confirmar_contraseña" placeholder="Confirmar Contraseña">
     <input type="submit" value="Enviar">
    </form>

  </body>
</html>
