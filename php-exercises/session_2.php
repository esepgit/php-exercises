<?php
  session_start();
  session_destroy();

  echo "se destruyó la sesión de usuario";
?>