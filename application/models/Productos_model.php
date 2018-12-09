<?php
class Productos_model extends CI_Model
{
  public function getProductos()
  {
    $query = $this->db->query("SELECT st_products.pk_id as 'ID',
      st_products.name as 'Nombre', st_products.price as 'Precio',
      st_categories.description as 'Categoria', st_suppliers.name as 'Proveedor'
      FROM as0_store.st_products join st_categories on
      st_products.fk_category = st_categories.pk_id join st_suppliers on
      st_products.fk_supplier = st_suppliers.pk_id;");
    return $query;
  }

  public function getProveedores()
  {
    $query = $this->db->query("SELECT pk_id, name FROM st_suppliers;");
    return $query;
  }

  public function getCategorias()
  {
    $query = $this->db->query("SELECT pk_id, description FROM st_categories;");
    return $query;
  }

  public function agregarProducto($nombre, $precio, $categoria, $proveedor)
  {
    $query = $this->db->query("INSERT INTO st_products(name, price, fk_category, fk_supplier) VALUES('$nombre', '$precio', '$categoria', '$proveedor');");
    return $query;
  }

  public function eliminarProducto($id)
  {
    $query = $this->db->query("DELETE FROM st_products WHERE pk_id = '$id';");
    return $query;
  }
}
?>
