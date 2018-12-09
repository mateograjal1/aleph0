<h1>Agregar un nuevo proveedor</h1>
<div class="formUsuariosDiv">
  <form class="formUsuarios" action="<?php echo site_url('proveedores/agregar'); ?>" method="post">
    <label for="nombre">Nombre: </label> <input type="text" name="nombre" placeholder="Nombre" required> <br>
    <label for="telefono1">Telefono 1: </label> <input type="text" name="telefono1" placeholder="Telefono 1" required> <br>
    <label for="telefono2">Telefono 2: </label> <input type="text" name="telefono2" placeholder="Telefono 2"> <br>
    <label for="email">e-Mail: </label> <input type="email" name="email" placeholder="email"> <br>
    <div class="botonWrapper">
      <input type="submit" name="enviar" value="Ingresar">
    </div>
  </form>
</div>
