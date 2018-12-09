<?php
class Usuarios_model extends CI_Model
{
  public function getUsuarios()
  {
    $query = $this->db->query("SELECT name as 'Nombre', last_name as 'Apellido', position as 'Cargo', pk_username as 'Usuario' from st_users;");
    return $query;
  }

  public function agregarUsuario($nombre, $apellido, $cargo, $contrasena, $permisos)
  {
    $usuario = strtolower(substr($nombre, 0, 3) . substr($apellido, 0, 3));
    $query = $this->db->query("SELECT * FROM st_users WHERE pk_username = '$usuario'");
    if ($query->num_rows() == 0)
    {
      $query = $this->db->query("INSERT INTO st_users(pk_username,password,name,last_name,position)VALUES('$usuario','$contrasena','$nombre','$apellido','$cargo');");
      $indicePermiso = 1;
      foreach ($permisos as $permiso) {
        if ($permiso != null)
        {
          $query = $this->db->query("INSERT INTO st_permissions_user(fk_user,fk_permission)VALUES('$usuario','$indicePermiso');");
        }
        $indicePermiso++;
      }
      return TRUE;
    }
    else
    {
      return FALSE;
    }
  }

  public function eliminarUsuario($id)
  {
    $query = $this->db->query("DELETE FROM st_users WHERE pk_username = '$id';");
    return $query;
  }
}
?>
