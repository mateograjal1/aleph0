<h1>Proveedores disponibles en el sistema</h1>
<form action="<?php echo site_url('proveedores/eliminar'); ?>" method="post">
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
      $telefono1 = $row['Telefono 1'];
      $telefono2 = $row['Telefono 2'];
      $email = $row['e-Mail'];
      echo "
      <tr>
      <td>$id</td>
      <td>$nombre</td>
      <td>$telefono1</td>
      <td>$telefono2</td>
      <td>$email</td>
      <td><button type='submit' name='eliminar' value='$id'>Eliminar</button></td>
      <tr>";
    }
    ?>
  </table>
</form>
