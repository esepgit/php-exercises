<?php
  include("../../db.php");

  if ($_POST) {
    $primernombre = (isset($_POST['primernombre']) ? $_POST["primernombre"] : "");
    $segundonombre = (isset($_POST['segundonombre']) ? $_POST["segundonombre"] : "");
    $primerapellido = (isset($_POST['primerapellido']) ? $_POST["primerapellido"] : "");
    $segundoapellido = (isset($_POST['segundoapellido']) ? $_POST["segundoapellido"] : "");
    $foto = (isset($_FILES['foto']['name']) ? $_FILES["foto"]['name'] : "");
    $cv = (isset($_FILES['cv']['name']) ? $_FILES["cv"]['name'] : "");
    $idpuesto= (isset($_POST['idpuesto']) ? $_POST["idpuesto"] : "");
    $fechadeingreso = (isset($_POST['fechadeingreso']) ? $_POST["fechadeingreso"] : "");

    // preparar inserción de datos
    $sentencia = $conexion->prepare("INSERT INTO empleados 
    (id, primernombre, segundonombre, primerapellido, segundoapellido, foto, cv, idpuesto, fechadeingreso) 
    VALUES (null, :primernombre, :segundonombre, :primerapellido, :segundoapellido, :foto, :cv, :idpuesto, :fechadeingreso)");

    // asignando valores que vienen del método POST (formulario)
    $sentencia->bindParam(":primernombre", $primernombre);
    $sentencia->bindParam(":segundonombre", $segundonombre);
    $sentencia->bindParam(":primerapellido", $primerapellido);
    $sentencia->bindParam(":segundoapellido", $segundoapellido);
    $sentencia->bindParam(":foto", $foto);
    $sentencia->bindParam(":cv", $cv);
    $sentencia->bindParam(":idpuesto", $idpuesto);
    $sentencia->bindParam(":fechadeingreso", $fechadeingreso);

    $sentencia->execute();
    header("Location: index.php");
  }

  $sentencia = $conexion->prepare("SELECT * FROM `puestos`"); 
  $sentencia->execute();
  $lista_puestos =  $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">
    Datos del empleado
  </div>
  <div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="primernombre" class="form-label">Primer nombre</label>
        <input
          type="text"
          class="form-control"
          name="primernombre"
          id="primernombre"
          aria-describedby="helpId"
          placeholder="Furina"
        />
      </div>

      <div class="mb-3">
        <label for="segundonombre" class="form-label">Segundo nombre</label>
        <input
          type="text"
          class="form-control"
          name="segundonombre"
          id="segundonombre"
          aria-describedby="helpId"
          placeholder="Fonta"
        />
      </div>

      <div class="mb-3">
        <label for="primerapellido" class="form-label">Primer apellido</label>
        <input
          type="text"
          class="form-control"
          name="primerapellido"
          id="primerapellido"
          aria-describedby="helpId"
          placeholder="DaFontaine"
        />
      </div>

      <div class="mb-3">
        <label for="segundoapellido" class="form-label">Segundo apellido</label>
        <input
          type="text"
          class="form-control"
          name="segundoapellido"
          id="segundoapellido"
          aria-describedby="helpId"
          placeholder="Chevalmarine"
        />
      </div>

      <div class="mb-3">
        <label for="foto" class="form-label">Foto<i class="fas fa-toolbox    "></i></label>
        <input
          type="file"
          class="form-control"
          name="foto"
          id="foto"
          aria-describedby="helpId"
          placeholder=""
        />
      </div>

      <div class="mb-3">
        <label for="cv" class="form-label">CV(PDF)</label>
        <input
          type="file"
          class="form-control"
          name="cv"
          id="cv"
          aria-describedby="helpId"
          placeholder=""
        />
      </div>
      
      <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select
          class="form-select form-select-sm"
          name="idpuesto"
          id="idpuesto"
        >
        <option selected disabled>Selecciona</option>
        <?php foreach ($lista_puestos as $registro) { ?>
          <option value="<?php echo $registro['id']; ?>">
            <?php echo $registro['nombredelpuesto']; ?>
          </option>
        <?php } ?>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
        <input
          type="date"
          class="form-control"
          name="fechadeingreso"
          id="fechadeingreso"
          aria-describedby="emailHelpId"
          placeholder="Fecha de ingreso a empresa"
        />
      </div>

      <button
        type="submit"
        class="btn btn-primary"
      >
        Agregar registro
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
  <div class="card-footer text-muted"></div>
</div>


<?php include("../../templates/footer.php"); ?>