<h1>Usuarios activos en el sistema</h1>
<form action="<?php echo site_url('usuarios/eliminar'); ?>" method="post">
  <table class="tablaResultados">
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cargo</th>
      <th>Usuario</th>
      <th>Eliminar</th>
    </tr>
    <?php
    foreach ($resultados->result_array() as $row) {
      $nombre = $row['Nombre'];
      $apellido = $row['Apellido'];
      $cargo = $row['Cargo'];
      $usuario = $row['Usuario'];
      echo "
      <tr>
      <td>$nombre</td>
      <td>$apellido</td>
      <td>$cargo</td>
      <td>$usuario</td>
      <td><button type='submit' name='eliminar' value='$usuario'>Eliminar</button></td>
      <tr>";
    }
    ?>
  </table>
</form>
