<?php
  $txtName = "";
  $rgLanguage = "";
  $checkphp = "";
  $checkhtml = "";
  $checkcss = "";
  $selectAnime = "";
  $txtComment = "";

  if ($_POST) {
    $txtName = (isset($_POST['txtName'])) ? $_POST['txtName'] : "";
    $rgLanguage = (isset($_POST['language'])) ? $_POST['language'] : "";
    $checkphp = (isset($_POST['checkphp']) == 'si') ? "checked" : "";
    $checkhtml = (isset($_POST['checkhtml']) == 'si') ? "checked" : "";
    $checkcss = (isset($_POST['checkcss']) == 'si') ? "checked" : "";
    $selectAnime = (isset($_POST['selectAnime'])) ? $_POST['selectAnime'] : "";
    $txtComment = (isset($_POST['txtComment'])) ? $_POST['txtComment'] : "";
    // aquí puedes insertar, calcular o modificar valores
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
  <?php if ($_POST) { ?>
  <strong>Hola </strong><?php echo $txtName ?>
  <br>
  <strong>Your option is </strong><?php echo $rgLanguage ?>
  <br>
  <strong>You are learning </strong>
  <?php echo ($checkphp === 'checked') ? 'PHP' : "" ?>
  <?php echo ($checkhtml === 'checked') ? 'HTML' : ""  ?>
  <?php echo ($checkcss === 'checked') ? 'CSS' : ""  ?>
  <br>
  <strong>Your anime is </strong><?php echo $selectAnime ?>
  <br>
  <strong>Your message is </strong><?php echo $txtComment ?>
  <?php } ?>

  <form action="ej31.php" method="post">
    name:
    <input value="<?php echo $txtName;?>" type="text" name="txtName">
    <br>
    Choose one:
    <br>
    php: <input type="radio" <?php echo ($rgLanguage == 'php' ? 'checked' : '')?> name="language" value="php" checked id="">
    html: <input type="radio" <?php echo ($rgLanguage == 'html' ? 'checked' : '')?> name="language" value="html" id="">
    css: <input type="radio" <?php echo ($rgLanguage == 'css' ? 'checked' : '')?> name="language" value="css" id="">
    <br>
    Choose:
    <br>
    php: <input type="checkbox" <?php echo $checkphp;?> name="checkphp" value="si" id="">
    html: <input type="checkbox" <?php echo $checkhtml;?> name="checkhtml" value="si" id="">
    css: <input type="checkbox" <?php echo $checkcss;?> name="checkcss" value="si" id="">
    <br>
    Select anime:
    <br>
    <select name="selectAnime" id="">
      <option value="">select</option>
      <option value="higurashi" <?php echo ($selectAnime === 'higurashi') ? "selected" : "" ?> >Higurashi</option>
      <option value="monogatari" <?php echo ($selectAnime === 'monogatari') ? "selected" : "" ?> >Monogatari</option>
      <option value="steins" <?php echo ($selectAnime === 'steins') ? "selected" : "" ?> >Steins Gate</option>
    </select>
    <br>

    You have any question?
    <br>
    <textarea name="txtComment" id="" cols="30" rows="10">
      <?php echo $txtComment?>
    </textarea>
    <br>
    <button>Send</button>
  </form>
</body>
</html>