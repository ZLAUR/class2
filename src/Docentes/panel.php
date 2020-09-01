<?php 
session_start ();
$varsesion = $_SESSION['email'];
if($varsesion == null || $varsesion= ''){
    header('Location: /');
    die();
}
?>
<!-- SECCION DE ENVIO DE TAREAS -->
<div class=contenedor>
<form class="contenedor0" action="panel/guardar.php" method="POST">
<?php if(isset($_SESSION['message_task'])){?>
<div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
  <?= $_SESSION['message_task'] ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php session_unset(); }?>

    <section class="contenedor1">
        <div class="contenedor1">
            <input name="materia" class="form-control input_conter" type="text" placeholder="Materia">
            <textarea name="descripcion" class="form-control input_conter" cols="30" rows="12" placeholder="Descripción"></textarea>
            <input  name="documento" class="form-control input_conter"  type="text" placeholder="Link del documento">
            <input name="guardar_tarea" class="btn btn-block input_enviar"  type="submit" value="Guardar tarea">
        </div>
        <a target="a_black" class="subir_tarea" href="https://drive.google.com/drive/folders/1yuBFZqVPf0LIwajuM6S1qAgzcW2h2EIP?usp=sharing">Subir tarea &#8599;</a>
    </section>
</form>

<div class=tablas>
<table class="table table-striped table-dark">
  <thead class="thead-dark">
    <tr>
      <th class="auto" scope="col">Materia</th>
      <th class="auto" scope="col">Descripción</th>
      <th class="auto" scope="col"><a href=""></a> Documento</th>
      <th class="auto" scope="col">Fecha</th>
      <th class="auto" scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
$consulta ="SELECT * FROM tareas";
$resultado= mysqli_query($conn, $consulta);

while ($row = mysqli_fetch_assoc($resultado)) { ?>
    <tr>
      <td class="auto"><?php echo $row['materia'];?></td>
      <td class="auto"><?php echo $row['descripcion'];?></td>
      <td class="auto"><a href="<?php echo $row['documento'];?>" target="a_black">&#10515;</a></td>
      <td class="auto"><?php echo $row['fecha'];?></td>
      <td class="edit2">
        <a class="edit" href="panel/borrar.php?id=<?php echo $row['id']?>">🗑</a>
        <a class="edit" href="panel/editar.php?id=<?php echo $row['id']?>">🔧</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

</div>

<!-- FIN DE LA SECCION DE ENVIO DE TAREAS -->

<!-- JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>