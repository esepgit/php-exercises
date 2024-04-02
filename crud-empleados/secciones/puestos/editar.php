<?php
  include("../../db.php");

  if (isset($_GET['txtID'])) {
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
    $sentencia = $conexion->prepare("SELECT * FROM `puestos` WHERE id = :id ");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_LAZY);
    $nombredelpuesto = $registro["nombredelpuesto"];
  }

  if ($_POST) {
    // recolectamos datos del método POST
    $nombredelpuesto = (isset($_POST['nombredelpuesto']) ? $_POST["nombredelpuesto"] : "");
    // preparar inserción de datos
    $sentencia = $conexion->prepare("UPDATE puestos SET nombredelpuesto = :nombredelpuesto WHERE id = :id");
    // asignando valores que vienen del método POST (formulario)
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->bindParam(":id", $txtID);
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
      <label for="txtID" class="form-label">ID</label>
      <input
        type="text"
        class="form-control"
        readonly
        name="txtID"
        id="txtID"
        aria-describedby="helpId"
        placeholder="id"
        value="<?php echo $txtID; ?>"
      />
    </div>

    <div class="mb-3">
      <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
      <input
        type="text"
        class="form-control"
        name="nombredelpuesto"
        id="nombredelpuesto"
        aria-describedby="helpId"
        placeholder="Desarrollador"
        value="<?php echo $nombredelpuesto; ?>"
      />
    </div>

    <button
      type="submit"
      class="btn btn-primary"
    >
      Actualizar
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