<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Materia</th>
      <th scope="col">Descripción</th>
      <th scope="col">Documento</th>
      <th scope="col"></a> fecha</th>
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
    </tr>
    <?php } ?>
  </tbody>
</table>



<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>