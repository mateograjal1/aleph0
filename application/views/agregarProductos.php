<h1>Agregar un producto al sistema</h1>
<div class="formUsuariosDiv">
  <form class="formUsuarios" action="<?php echo site_url('productos/agregar'); ?>" method="post">
    <label for="nombre">Nombre: </label> <input type="text" name="nombre" placeholder="Nombre" required> <br>
    <label for="precio">Precio: </label> <input type="number" name="precio" min="1" step="any" placeholder="Precio" required> <br>
    <label for="categoria">Categoria: </label>
    <select name="categoria">
    <?php
    foreach ($categorias as $categoria) {
      echo '<option value=' . $categoria['pk_id'] . '>' . $categoria['description'] . '</option>';
    }
    ?>
    </select>
    <br>
    <label for="provedor">Proveedor: </label>
    <select name="proveedor">
    <?php
    foreach ($proveedores as $proveedor) {
      echo '<option value=' . $proveedor['pk_id'] . '>' . $proveedor['name'] . '</option>';
    }
    ?>
    </select>
    <br>
    <div class="botonWrapper">
      <input type="submit" name="enviar" value="Ingresar">   
    </div>
  </form>
</div>
