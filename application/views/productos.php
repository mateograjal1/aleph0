<h1>Productos disponibles en el sistema</h1>
<form action="<?php echo site_url('productos/eliminar'); ?>" method="post">
  <table class="tablaResultados">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Categoria</th>
      <th>Proveedor</th>
      <th>Eliminar</th>
    </tr>
    <?php
    foreach ($resultados->result_array() as $row) {
      $id = $row['ID'];
      $nombre = $row['Nombre'];
      $precio = $row['Precio'];
      $categoria = $row['Categoria'];
      $proveedor = $row['Proveedor'];
      echo "
      <tr>
      <td>$id</td>
      <td>$nombre</td>
      <td>$precio</td>
      <td>$categoria</td>
      <td>$proveedor</td>
      <td><button type='submit' name='eliminar' value='$id'>Eliminar</button></td>
      <tr>";
    }
    ?>

  </table>
</form>
