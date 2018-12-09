<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Almacen extends MY_Controller
{

  public function index()
  {
    if ($this->input->post('usuario') == null || $this->input->post('contrasena') == null)
    {
      redirect(base_url() . 'index.php/login');
    }
    else
    {
      $usuario = $this->input->post('usuario');
      $contrasena = $this->input->post('contrasena');
      $this->load->model('Almacen_model');
      if ($this->Almacen_model->validarInicioSesion($usuario, $contrasena) == TRUE)
      {
        $this->Almacen_model->validarPermisos($usuario);
        $this->session->sesionIniciada = TRUE;
        $this->load->view('header', $this->session->dataTitulo);
        $this->load->view('sidebar', $this->session->permisos);
        $this->load->view('almacen');
        $this->load->view('footer');
      }
      else
      {
        redirect(base_url() . 'index.php/login/failedLogIn');
      }
    }
  }
}
?>
