<?php
class Proveedores_model extends CI_Model
{
  public function getProveedores()
  {
    $query = $this->db->query("SELECT pk_id as 'ID', name as 'Nombre', contact_phone as 'Telefono 1', contact_phone_secondary as 'Telefono 2', contact_email as 'e-Mail' from st_suppliers;");
    return $query;
  }

  public function agregarProveedor($nombre, $telefono1, $telefono2 = "", $email = "")
  {
    $query = $this->db->query("INSERT INTO st_suppliers(name, contact_phone, contact_phone_secondary, contact_email) VALUES('$nombre', '$telefono1','$telefono2','$email');");
    return $query;
  }

  public function eliminarProveedor($id)
  {
    $query = $this->db->query("DELETE FROM st_suppliers WHERE pk_id = '$id';");
    return $query;
  }
}
?>
