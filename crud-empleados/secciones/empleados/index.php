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
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">CV</th>
            <th scope="col">Puesto</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <td scope="row">Furina</td>
            <td>Imagen.jpeg</td>
            <td>CV.pdf</td>
            <td>Programador</td>
            <td>1/1/1</td>
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
        </tbody>
      </table>
    </div>
    
  </div>
</div>


<?php include("../../templates/footer.php"); ?>