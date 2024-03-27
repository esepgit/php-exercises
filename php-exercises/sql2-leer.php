<?php
  $server = "localhost";
  $user = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$server;dbname=album", $user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `fotos`";
    $sentencia = $conn->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();
    
    //print_r($resultado);

    foreach($resultado as $foto){
      echo $foto['nombre'];
    }
  } catch (PDOException $e) {
    echo "Conexión fallida: ".$e;
  }
?>