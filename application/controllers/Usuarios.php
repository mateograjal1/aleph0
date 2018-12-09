<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller
{
  public function index()
  {
    if ($this->continuar('Usuarios'))
    {
      $data = array('resultados' => $this->Usuarios_model->getUsuarios());
      $this->load->view('usuarios', $data);
    }
    $this->load->view('footer');
  }

  public function agregar()
  {
    if ($this->continuar('Usuarios'))
    {
      if ($this->input->post('enviar') != null)//Si el boton fue clickeado
      {
        $permisos = array(
          'productos' => $this->input->post('productos'),
          'categorias' => $this->input->post('categorias'),
          'proveedores' => $this->input->post('proveedores'),
          'usuarios' => $this->input->post('usuarios')
        );
        //Validamos si hay algun error ingresando el usuario
        if (!$this->Usuarios_model->agregarUsuario($this->input->post('nombre'), $this->input->post('apellido'), $this->input->post('cargo'), password_hash($this->input->post('contrasena'), PASSWORD_DEFAULT), $permisos))
        {
          echo "Hubo un error ingresando el usuario";
        }
        else
        {
          $data = array(
            'usuario' => strtolower(substr($this->input->post('nombre'), 0, 3) . substr($this->input->post('apellido'), 0, 3)),
            'contrasena' => $this->input->post('contrasena')
          );
          $this->load->view('usuarioCreado', $data);
        }
      }
      else
      {
        $this->load->view('agregarUsuarios');
      }
    }
    $this->load->view('footer');
  }

  public function eliminar()
  {
    if ($this->continuar("Usuarios"))
    {
      if ($this->input->post('eliminar') != null)
      {
        $this->Usuarios_model->eliminarUsuario($this->input->post('eliminar'));
        $this->load->view('usuarioEliminado');
      }
    }
    $this->load->view('footer');
  }
}
?>
