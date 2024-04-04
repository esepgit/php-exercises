<?php
  include("../../db.php");

  $sentencia = $conexion->prepare("SELECT *,
  (SELECT nombredelpuesto FROM puestos WHERE puestos.id = empleados.idpuesto limit 1) as puesto 
  FROM `empleados`"); 
  $sentencia->execute();
  $lista_empleados =  $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include("../../templates/header.php"); ?>

<div class="card">
  <div class="card-header">
    <a
      name=""
      id=""
      class="btn btn-primary"
      href="crear.php"
      role="button"
      >Agregar registro</a
    >
    
  </div>
  <div class="card-body">
    <div
      class="table-responsive-sm"
    >
      <table
        class="table"
      >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">CV</th>
            <th scope="col">Puesto</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($lista_empleados as $registro) { ?>
          <tr class="">
            <td scope="row"><?php echo $registro['id']; ?></td>
            <td>
              <?php echo $registro['primernombre']; ?>
              <?php echo $registro['segundonombre']; ?>
              <?php echo $registro['primerapellido']; ?>
              <?php echo $registro['segundoapellido']; ?>
            </td>
            <td><?php echo $registro['foto']; ?></td>
            <td><?php echo $registro['cv']; ?></td>
            <td><?php echo $registro['puesto']; ?></td>
            <td><?php echo $registro['fechadeingreso']; ?></td>
            <td>
              <a
                name=""
                id=""
                class="btn btn-primary"
                href="crear.php"
                role="button"
                >Carta</a
              >
              <a
                name=""
                id=""
                class="btn btn-info"
                href="crear.php"
                role="button"
                >Editar</a
              >
              <a
                name=""
                id=""
                class="btn btn-danger"
                href="crear.php"
                role="button"
                >Eliminar</a
              >
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    
  </div>
</div>


<?php include("../../templates/footer.php"); ?>