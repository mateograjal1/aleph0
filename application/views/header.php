<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href = "<?php echo base_url(); ?>assets/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta charset="utf-8">
    <title><?php echo $this->session->titulo; ?></title>
  </head>
  <body>
    <div class="topdivider">
      <ul class="topbar">
        <li> <a href="<?php echo base_url() . 'index.php'; ?>"> <i class="fas fa-store" id="iconoTienda"></i></a> </li>
        <li> <a href="<?php echo base_url() . 'index.php'; ?>"> Almacen Aleph Subcero<br> <?php echo $this->session->nombre ?> </a> </li>
        <?php
        if ($this->session->sesionIniciada == TRUE)
        {
          $direccion = '"' . base_url() . 'index.php/login/logout"';
          echo "
          <li> <a href=" . $direccion . "> Cerrar Sesion</a></li>
          ";
        }
        else
        {
          $direccion = '"' . base_url() . 'index.php/login"';
          echo "
          <li> <a href=$direccion> Iniciar Sesion</a></li>
          ";

        }
        ?>
      </ul>
    </div>
