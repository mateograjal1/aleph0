<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends MY_Controller
{
  public function index()
  {
    if ($this->continuar("Proveedores"))
    {
      $data = array('resultados' => $this->Proveedores_model->getProveedores());
      $this->load->view('proveedores', $data);
    }
    $this->load->view('footer');
  }

  public function agregar()
  {
    if ($this->continuar("Proveedores"))
    {
      if ($this->input->post('enviar') != NULL)
      {
        $nombre = $this->input->post('nombre');
        $telefono1 = $this->input->post('telefono1');
        $telefono2 = $this->input->post('telefono2') == NULL ? "" : $this->input->post('telefono2');
        $email = $this->input->post('email') == NULL ? "" : $this->input->post('email');
        $this->Proveedores_model->agregarProveedor($nombre, $telefono1, $telefono2, $email);
        $this->load->view('proveedorCreado');
      }
      else
      {
        $this->load->view('agregarProveedores');
      }
    }
    $this->load->view('footer');
  }

  public function eliminar()
  {
    if ($this->continuar("Proveedores"))
    {
      if ($this->input->post('eliminar') != null)
      {
        $this->Proveedores_model->eliminarProveedor($this->input->post('eliminar'));
        $this->load->view('proveedorEliminado');
      }
    }
    $this->load->view('footer');
  }
}
?>
