<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ReadZone</title>
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<?php
require_once("./db/conexiondb.php");
session_start();

 ?>
<body>
  <main>
      <div class="row">
          <div class="col s12 m12 l12 center">
          </div>
      </div>

      <div class="div-introducir-email">
        <div class="row">
            <form id="form-div-registro" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post">
                <div class="row">
                    <div class="col s12 m12 l12 center red white-text">
                      <h5>Recuperar contraseña</h5>

                    </div>
                </div>

                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="email_recuperar" type="text" name="email-recuperar">
                        <label for="email_recuperar">Introduca su email*</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12 m12 l2 offset-l4">
                        <button id="btn-submit-recuperar-email" type="submit" name="btn-submit-recuperar-email" class="btn red">Aceptar</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
      <?php
      if(isset($_POST['btn-submit-recuperar-email'])){
        $email = $_POST['email-recuperar'];
        if(empty($email)){
          echo '<script type="text/javascript">alert("El correo es introducido es incorrecto o vacio")</script>';
        } else {
          // echo $email;
          $_SESSION['email'] = $email;
          $query2 = mysqli_query($conn,"SELECT estado FROM users WHERE correo='$email'");
          if (mysqli_num_rows($query2) > 0) {
            while ($row2 = mysqli_fetch_assoc($query2)){
              $estado= $row2['estado'];
              if($estado == 1) {
                $message = '¿Quiere usted recuperar su cuenta?';
                echo "<script type='text/javascript'> //not showing me this
                    if(confirm('$message')){
                      window.location.replace(\"activarCuenta.php\");

                    } else {
                      window.location.replace(\"index.php\");
                    }
                </script>";
              } else {



          $query = mysqli_query($conn, "SELECT * FROM Users WHERE correo = '$email'");
          if (mysqli_num_rows($query) == 1) {
            while ($row = mysqli_fetch_assoc($query)) {
              // echo $row['nombre'];
              ?>
              <style media="screen">
                .div-introducir-email {
                  display: none !important;

                }
              </style>
              <div class="div-introducir-respuesta">
                <div class="row">
                    <form id="form-div-registro" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post">
                        <div class="row">
                            <div class="col s12 m12 l12 center">
                                <h5>Recuperar contraseña</h5>
                            </div>
                        </div>
                        <div id="form-div-input-form" class="row">
                          <div class="input-field col s12 m12">
                            <select name="preguntas">

                              <option value="<?php echo $row['pregunta']?>" disabled selected><?php echo $row['pregunta'] ?></option>
                            </select>
                          </div>
                        </div>
                        <div id="form-div-input-form" class="row">
                            <div class="input-field col s12">
                                <input id="respuesta" type="text" name="respuesta">
                                <label for="respueta">Respuesta*</label>
                            </div>
                        </div>
                        <div id="form-div-input-form" class="row">
                            <div class="input-field col s12 m12 l2 offset-l4">
                                <button id="btn-respuesta-submit" type="submit" name="btn-respuesta-submit" class="btn red">Aceptar</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>

              <?php
            }
          } else {
            echo '<script type="text/javascript">alert("El correo es introducido es incorrecto o vacio")</script>';
          }
        }
        }
        }
        }

      }
      include('acciones/recuperar.php');

       ?>


  </main>
    <!--################ FOOTER ################-->
    <?php include 'footer.php'; ?>
        <!--################################-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/pinzon1992/materialize_table_pagination/f9a8478f/js/pagination.js"></script>
    <script type="text/javascript" src="scripts/comun.js"></script>
    <script type="text/javascript" src="scripts/contenido.js"></script>

</body>

</html>
