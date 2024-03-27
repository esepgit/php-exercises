<?php
  $jsonContent = '[
    {"name": "Furina", "lastname": "DaFontaine"},
    {"name": "Barbara", "lastname": "Ragnar"}
  ]';

  $result = json_decode($jsonContent);

  foreach($result as $person) {
    echo $person->name." ".$person->lastname."<br>";
  }
?>