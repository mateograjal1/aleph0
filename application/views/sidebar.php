<div class="leftsidebar">
  <ul class="sidebar">
  <?php
  if ($productos == TRUE)
  {
    $verUsuarios = base_url() . "index.php/usuarios";
    $agregarUsuarios = base_url() . "index.php/usuarios/agregar";
    $verProductos = base_url() . "index.php/productos";
    $agregarProductos = base_url() . "index.php/productos/agregar";
    $verCategorias = base_url() . "index.php/categorias";
    $agregarCategorias = base_url() . "index.php/categorias/agregar";
    $verProveedores = base_url() . "index.php/proveedores";
    $agregarProveedores = base_url() . "index.php/proveedores/agregar";
    echo '
    <li> Productos </li>
    <li> <a href="' . $verProductos . '">Ver productos</a> </li>
    <li> <a href="' . $agregarProductos . '">Agregar productos</a> </li>
    ';
  }
  if ($categorias == TRUE)
  {
    echo '
    <li> Categorias </li>
    <li> <a href="' . $verCategorias . '">Ver categorias</a> </li>
    <li> <a href="' . $agregarCategorias . '">Agregar categorias</a> </li>
    ';
  }
  if ($proveedores == TRUE)
  {
    echo '
    <li> Proveedores </li>
    <li> <a href="' . $verProveedores . '">Ver Proveedores</a> </li>
    <li> <a href="' . $agregarProveedores . '">Agregar Proveedores</a> </li>
    ';
  }
  if ($usuarios == TRUE)
  {
    echo '
    <li> Usuarios </li>
    <li> <a href="' . $verUsuarios . '">Ver Usuarios</a> </li>
    <li> <a href="' . $agregarUsuarios . '">Agregar Usuarios</a> </li>
    ';
  }
  ?>
  </ul>
</div>
