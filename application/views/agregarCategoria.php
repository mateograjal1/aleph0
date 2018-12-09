<h1>Agregar una nueva categoria</h1>
<div class="formUsuariosDiv">
  <form class="formUsuarios" action="<?php echo site_url('categorias/agregar'); ?>" method="post">
    <label for="nombre">Nombre: </label> <input type="text" name="nombre" placeholder="Nombre" required> <br>
    <div class="botonWrapper">
      <input type="submit" name="enviar" value="Ingresar">
    </div>
  </form>
</div>
