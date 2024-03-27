<?php
  session_start();
  if ($_POST) {
    if ($_POST['user'] == 'klee' && $_POST['password'] == 'pyro') {
      $_SESSION['user'] = "klee";
      header('Location: index.php');
    } else {
      echo "<script> alert('credenciales incorrectas'); </script>";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container">
      <div  class="row justify-content-center align-items-center g-2">
        <div  class="col-md-4"></div>
          <div  class="col-md-4">
            <br>
            <div class="card">
              <div class="card-header">Iniciar sesión</div>
              <div class="card-body">
                <form action="login.php" method="post">
                  usuario:
                  <input class="form-control" type="text" name="user">
                  contraseña:
                  <input class="form-control" type="password" name="password">
                  <br>
                  <button class="btn btn-primary" type="submit">Entrar</button>
                </form>
              </div>
            </div>
          </div>
          <div  class="col-md-4"></div> 
      </div>
    </div>
    
  </body>
</html>
