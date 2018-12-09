<div>
  <h1>Bienvenido</h1>
  <p>Por favor inicia sesion</p>
  <div class="loginFormDiv">
    <form class="loginForm" action=<?php echo site_url('almacen'); ?> method="post">
      <label for="usuario">Usuario:</label>
      <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required>
      <br>
      <label for="contrasena">Contraseña:</label>
      <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
      <br>
      <div class="botonWrapper">
        <input type="submit" value="Iniciar sesion">
        <?php
        if ($error == TRUE)
        {
          echo '<label class="errorLabel">Usuario o contraseña incorrecta. Por favor intenta de nuevo</label>';
        }
        ?>
      </div>
    </form>
  </div>
</div>
