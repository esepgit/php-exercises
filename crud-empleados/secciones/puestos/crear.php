<?php
  include("../../db.php");

  if ($_POST) {
    // recolectamos datos del método POST
    $nombredelpuesto = (isset($_POST['nombredelpuesto']) ? $_POST["nombredelpuesto"] : "");
    // preparar inserción de datos
    $sentencia = $conexion->prepare("INSERT INTO puestos (id, nombredelpuesto) VALUES (null, :nombredelpuesto)");
    // asignando valores que vienen del método POST (formulario)
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->execute();
    header("Location: index.php");
  }
?>

<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">Puestos</div>
  <div class="card-body">
   <form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
      <input
        type="text"
        class="form-control"
        name="nombredelpuesto"
        id="nombredelpuesto"
        aria-describedby="helpId"
        placeholder="Desarrollador"
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