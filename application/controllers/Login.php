<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller
{
  public function index()
  {
    if ($this->session->sesionIniciada == TRUE)
    {
      redirect(base_url() . 'index.php');
    }
    else
    {
      $data = array('error' => FALSE);
      $this->load->view('header', $this->session->dataTitulo);
      $this->load->view('sidebar', $this->session->permisos);
      $this->load->view('login', $data);
      $this->load->view('footer');
    }
  }

  public function logOut()
  {
    $this->session->sess_destroy();
    redirect(base_url() . 'index.php');
  }

  public function failedLogIn()
  {
    $data = array('error' => TRUE);
    $this->load->view('header', $this->session->dataTitulo);
    $this->load->view('sidebar', $this->session->permisos);
    $this->load->view('login', $data);
    $this->load->view('footer');
  }
}
 ?>
