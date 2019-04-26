<?php
require_once("./db/conexiondb.php");
require_once("cambiarPass.php");


if(isset($_POST['btn-respuesta-submit'])){

  $email = $_SESSION['email'];
  $respuesta = $_POST['respuesta'];

  $query = mysqli_query($conn, "SELECT * FROM Users WHERE respuesta = '$respuesta' AND correo = '$email'");
  if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
      $respuesta_correcta = $row['respuesta'];
      $_SESSION['respuesta'] = $respuesta_correcta;

      ?>
      <style media="screen">
        .div-introducir-email {
          display: none !important;
        }
      </style>
      <div class="div-introducir-nueva-contrasena">
        <div class="row">
            <form id="form-div-registro" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 center">
                    </div>
                </div>

                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="nueva-password" type="password" name="nueva-password">
                        <label for="nueva-password">Contraseña nueva</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12 m12 l2 offset-l4">
                        <button id="btn-cambiar-password-submit" type="submit" name="btn-cambiar-password-submit" class="btn red">Cambiar</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
      <?php

    }
  } else {
    echo "la respuesta no es correcta";
  }
}

 ?>
