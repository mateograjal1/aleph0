<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

  protected function continuar($permiso)
  {
    $this->load->model($permiso .'_model');
    $this->load->view('header', $this->session->dataTitulo);
    $this->load->view('sidebar', $this->session->permisos);
    if ($this->session->sesionIniciada == FALSE)
    {
      redirect(base_url() . 'index.php/login');
    }
    else if ($this->session->permisos[strtolower($permiso)] == FALSE)
    {
      $this->load->view('permisosInvalidos');
      return false;
    }
    return true;
  }

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->has_userdata('permisos'))
    {
      $this->session->permisos = array(
        'productos'=> FALSE,
        'categorias' => FALSE,
        'proveedores' => FALSE,
        'usuarios' => FALSE
      );
    }
    if (!$this->session->has_userdata('dataTitulo'))
    {
      $this->session->dataTitulo = array(
        'titulo' => 'Inicio de sesion',
        'sesionIniciada' => FALSE
      );
    }
    if (!$this->session->has_userdata('sesionIniciada'))
    {
      $this->session->sesionIniciada = FALSE;
    }
    if (!$this->session->has_userdata('usuario'))
    {
      $this->session->usuario = "";
    }
    if (!$this->session->has_userdata('contrasena'))
    {
      $this->session->contrasena = "";
    }
    if (!$this->session->has_userdata('nombre'))
    {
      $this->session->nombre = "";
    }
    $this->session->plantilla = array(
        'table_open' => '<table class="tablaResultados">'
      );
      $this->table->set_template($this->session->plantilla);

  }
}
?>
