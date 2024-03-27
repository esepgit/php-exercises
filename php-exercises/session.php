<?php
  session_start();

  $_SESSION["user"] = "esep";
  $_SESSION["status"] = "logged";

  echo "Session started".":<br>";
  echo "User ".$_SESSION['user']." status: ".$_SESSION['status'];

?>