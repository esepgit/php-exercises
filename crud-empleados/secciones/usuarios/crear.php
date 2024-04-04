<?php 
  include("../../db.php");

  if ($_POST) {
    // recolectamos datos del método POST
    $usuario = (isset($_POST['usuario']) ? $_POST["usuario"] : "");
    $password = (isset($_POST['password']) ? $_POST["password"] : "");
    $correo = (isset($_POST['correo']) ? $_POST["correo"] : "");
    // preparar inserción de datos
    $sentencia = $conexion->prepare("INSERT INTO usuarios (id, usuario, password, correo) VALUES (null, :usuario, :password, :correo)");
    // asignando valores que vienen del método POST (formulario)
    $sentencia->bindParam(":usuario", $usuario);
    $sentencia->bindParam(":password", $password);
    $sentencia->bindParam(":correo", $correo);
    $sentencia->execute();
    header("Location: index.php");
  }
?>
<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">Datos del usuario</div>
  <div class="card-body">
   <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="usuario" class="form-label">Nombre usuario</label>
      <input
        type="text"
        class="form-control"
        name="usuario"
        id="usuario"
        aria-describedby="helpId"
        placeholder="Furina"
      />
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Contraseña<i class="fas fa-container-storage    "></i></label>
      <input
        type="password"
        class="form-control"
        name="password"
        id="password"
        aria-describedby="helpId"
        placeholder="Escriba su contraseña"
      />
    </div>

    <div class="mb-3">
      <label for="correo" class="form-label">Correo</label>
      <input
        type="email"
        class="form-control"
        name="correo"
        id="correo"
        aria-describedby="helpId"
        placeholder="furina@teyvald.ty"
      />
    </div>
    
    <button
      type="submit"
      class="btn btn-primary"
    >
      Agregar
    </button>

    <a
      name=""
      id=""
      class="btn btn-dark"
      href="index.php"
      role="button"
      >Cancelar</a
    >
   </form>
  </div>
</div>

<?php include("../../templates/footer.php"); ?>