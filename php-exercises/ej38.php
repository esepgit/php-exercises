<?php
// leer archivo
  $archivo = "archivo.txt";
  $archivoAbierto = fopen($archivo, "r");
  $contenido = fread($archivoAbierto, filesize($archivo));
  echo $contenido;

  // crear archivo
  $nombreArchivo = "nuevo.txt";
  $contenido = "Hola mundo desde un nuevo archivo";
  $archivoACrear = fopen($nombreArchivo, "w");
  fwrite($archivoACrear, $contenido);
  fclose($archivoACrear);

?>
