<?php
  session_start();
 if (isset($_SESSION['user']) != 'klee') {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <title>Portafolio</title>
</head>
<body>
  <div class="container">
    <a href="index.php">Inicio</a>
    <a href="portafolio.php">Portafolio</a>
    <a href="cerrar.php">Cerrar</a>