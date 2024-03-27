<?php 
  if ($_POST) {
    //print_r($_POST);
    print_r($_FILES['archive']['name']);
    move_uploaded_file($_FILES['archive']['tmp_name'], $_FILES['archive']['name']);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="ej32.php" enctype="multipart/form-data" method="post">
    image:
    <input type="file" name="archive" id="">
    <br>
    <button type="submit">Send</button>
  </form>
</body>
</html>