<?php
class Categorias_model extends CI_Model
{
  public function getCategorias()
  {
    $query = $this->db->query("SELECT pk_id as 'ID', description as 'Nombre' FROM st_categories;");
    return $query;
  }

  public function agregarCategoria($nombre)
  {
    $query = $this->db->query("INSERT INTO st_categories(description) VALUES('$nombre');");
    return $query;
  }

  public function eliminarCategoria($id)
  {
    $query = $this->db->query("DELETE FROM st_categories WHERE pk_id = '$id';");
    return $query;
  }
}
 ?>
