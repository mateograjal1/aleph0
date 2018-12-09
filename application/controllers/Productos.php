<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends MY_Controller
{

  public function index()
  {
    if ($this->continuar('Productos'))
    {
      $data = array('resultados' => $this->Productos_model->getProductos());
      $this->load->view('productos', $data);
    }
    $this->load->view('footer');
  }

  public function agregar()
  {
    if ($this->continuar('Productos'))
    {
      if ($this->input->post('enviar') != null) //vamos a ingresar uno nuevo
      {
        $nombre = $this->input->post('nombre');
        $precio = $this->input->post('precio');
        $categoria = $this->input->post('categoria');
        $proveedor = $this->input->post('proveedor');
        $this->Productos_model->agregarProducto($nombre, $precio, $categoria, $proveedor);
        $this->load->view('productoCreado');
      }
      else
      {
        $data = array(
          'proveedores' => $this->Productos_model->getProveedores()->result_array(),
          'categorias' => $this->Productos_model->getCategorias()->result_array(),
          'agregarOtro' => "FALSE"
        );
        $this->load->view('agregarProductos', $data);
      }
    }
    $this->load->view('footer');
  }

  public function eliminar()
  {
    if ($this->continuar('Productos'))
    {
      if ($this->input->post('eliminar') != null)
      {
        $this->Productos_model->eliminarProducto($this->input->post('eliminar'));
        $this->load->view('productoEliminado');
      }
    }
    $this->load->view('footer');
  }
}
?>
