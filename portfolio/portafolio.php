<?php include 'cabecera.php'; ?>
<?php include 'conexion.php'; ?>
<?php
  if ($_POST) {
    print_r($_POST);
    $name = $_POST['name'];
    $objConexion = new Conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$name', 'imagen.jpg', 'proyecto bueno')";
    $objConexion->ejecutar($sql);
  }
  
?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          Project data
        </div>
        <div class="card-body">
          <form action="portafolio.php" method="post" enctype="multipart/form-data">
            Nombre del proyecto:
            <input class="form-control" type="text" name="name">
            <br>
            Imagen del proyecto:
            <input class="form-control" type="file" name="archive">
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
          </form> 
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td scope="row">3</td>
              <td>Web App</td>
              <td>image.jpg</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</div>






  
<?php include 'pie.php'; ?>