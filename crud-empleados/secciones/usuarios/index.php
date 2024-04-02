<?php 
  include("../../db.php");

  $sentencia = $conexion->prepare("SELECT * FROM `usuarios`"); 
  $sentencia->execute();
  $lista_usuarios =  $sentencia->fetchAll(PDO::FETCH_ASSOC);
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
      >Agregar usuarios</a
    >
  </div>
  <div class="card-body">
    <div class="container"><div
  class="table-responsive-sm"
>
  <table
    class="table"
  >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre del usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Correo</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($lista_usuarios as $usuario){ ?>
      <tr class="">
        <td scope="row"><?php echo $usuario['id'] ;?></td>
        <td><?php echo $usuario['usuario'] ;?></td>
        <td>******</td>
        <td><?php echo $usuario['correo'] ;?></td>
        <td>
          <a
            class="btn btn-info"
            href="editar.php?=<?php echo $usuario['id'] ;?>" ?
            role="button"
            >Editar</a
          >
          <a
            class="btn btn-danger"
            href="index.php.php?=<?php echo $usuario['id'] ;?>" ?
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