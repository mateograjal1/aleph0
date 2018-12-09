<?php

class Almacen_model extends CI_Model
{
  public function validarInicioSesion($usuario, $contrasena)
  {
    $query = $this->db->query("SELECT password, name, last_name FROM st_users WHERE pk_username = '$usuario';");
    if ($query->num_rows() == 1)
    {
      if (password_verify($contrasena, $query->result_array()[0]['password']))
      {
        $this->session->sesionIniciada = TRUE;
        $this->session->usuario = $usuario;
        $this->session->contrasena = $contrasena;
        $this->session->nombre = $query->result_array()[0]['name'] . " " . $query->result_array()[0]['last_name'];
        return TRUE;
      }
    }
    return FALSE;
  }

  public function validarPermisos($usuario)
  {
    $query = $this->db->query("SELECT fk_permission FROM st_permissions_user WHERE fk_user = '$usuario';");
    $permisos = array(
      'productos'=> FALSE,
      'categorias' => FALSE,
      'proveedores' => FALSE,
      'usuarios' => FALSE
    );
    foreach ($query->result_array() as $row) {
      switch ($row['fk_permission']) {
        case 1:
          $permisos['productos'] = TRUE;
        break;
        case 2:
          $permisos['categorias'] = TRUE;
        break;
        case 3:
          $permisos['proveedores'] = TRUE;
        break;
        case 4:
          $permisos['usuarios'] = TRUE;
        break;
        default:
          break;
      }
      $this->session->permisos = $permisos;
    }
  }

}
?>
