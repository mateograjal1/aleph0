<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends MY_Controller
{

  public function index()
  {
    if ($this->continuar('Categorias'))
    {
      $data = array('resultados' => $this->Categorias_model->getCategorias());
      $this->load->view('categorias', $data);
    }
    $this->load->view('footer');
  }

  public function agregar()
  {
    if ($this->continuar('Categorias'))
    {
      if ($this->input->post('enviar') != null)
      {
        $nombre = $this->input->post('nombre');
        $this->Categorias_model->agregarCategoria($nombre);
        $this->load->view('categoriaCreada');
      }
      else
      {
        $this->load->view('agregarCategoria');
      }
    }
    $this->load->view('footer');
  }

  public function eliminar()
  {
    if ($this->continuar('Categorias'))
    {
      if ($this->input->post('eliminar') != null)
      {
        $this->Categorias_model->eliminarCategoria($this->input->post('eliminar'));
        $this->load->view('categoriaEliminada');
      }
    }
    $this->load->view('footer');
  }
}
 ?>
