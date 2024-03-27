<?php
  $server = "localhost";
  $user = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$server;dbname=album", $user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programación', 'foto.jpg')";
    $conn->exec($sql);
    
    echo "Conexión establecida";
  } catch (PDOException $e) {
    echo "Conexión fallida: ".$e;
  }
?>