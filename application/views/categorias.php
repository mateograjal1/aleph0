<h1>Productos disponibles en el sistema</h1>
<form action="<?php echo site_url('categorias/eliminar'); ?>" method="post">
  <table class="tablaResultados">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Eliminar</th>
    </tr>
    <?php
    foreach ($resultados->result_array() as $row) {
      $id = $row['ID'];
      $nombre = $row['Nombre'];
      echo "
      <tr>
      <td>$id</td>
      <td>$nombre</td>
      <td><button type='submit' name='eliminar' value='$id'>Eliminar</button></td>
      <tr>";
    }
    ?>

  </table>
</form>
