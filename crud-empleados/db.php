<?php
  $servidor = 'localhost';
  $usuario = 'root';
  $baseDeDatos = 'crud-empleados';
  $password = '';

  try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $password);
  } catch (Exception $e) {
      echo $e->getMessage();
  }
?>