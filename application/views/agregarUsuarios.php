<h1>Agregar usuario al sistema</h1>
<div class="formUsuariosDiv">
  <form class="formUsuarios" action="<?php echo site_url('usuarios/agregar'); ?>" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <br>
    <label for="apellido">Apellido: </label>
    <input type="text" name="apellido" placeholder="Apellido" required>
    <br>
    <label for="cargo">Cargo: </label>
    <input type="text" name="cargo" placeholder="Cargo" required>
    <br>
    <label for="contrasena">Contraseña: </label>
    <input type="password" name="contrasena" placeholder="Contraseña" required>
    <br>
    <fieldset>
      <legend>Permisos</legend>
      <input type="checkbox" name="productos"> Productos<br>
      <input type="checkbox" name="categorias"> Categorias<br>
      <input type="checkbox" name="proveedores"> Proveedores<br>
      <input type="checkbox" name="usuarios"> Usuarios <br>
    </fieldset>
    <div class="botonWrapper">
      <input type="submit" name="enviar" value="Ingresar">
    </div>
  </form>
</div>
