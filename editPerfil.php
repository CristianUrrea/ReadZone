<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>ReadZone</title>
    <!-- Import flickty -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Import font googleapis -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified webuiPopover CSS -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css'>
    <!-- Mis css -->
    <link rel="stylesheet" href="css/editPerfil.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--################ NAV ################-->
    <?php
    session_start();

    include 'nav.php';
    include_once('acciones/perfil.php');


    ?>
        <!--################################-->

        <main>
          <div style="margin-top: 20px;" class="row">
              <div class="col s12 m12 l8 offset-l2">
                  <ul class="tabs">
                      <li class="tab col s6 m6 l4"><a class="red-text" href="#general">General</a></li>
                      <li class="tab col s6 m6 l4"><a class="red-text" href="#imagen">Imagen</a></li>
                      <li class="tab col s6 m6 l4"><a class="red-text" href="#baja">Dar de baja</a></li>
                  </ul>
              </div>
          </div>
          <div id="general">
            <div id="div-row-edit-profile-general" class="row">
                <form id="form-div-perfil-general" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post" enctype="multipart/form-data">
                  <?php
                   if (isset($_SESSION['username'])) {
                       $user = $_SESSION['username'];
                       $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                       if (mysqli_num_rows($query) > 0) {
                           while ($row = mysqli_fetch_assoc($query)) {
                               ?>
                    <div class="row">
                        <div class="col s12 m12 l12 center">
                            <!-- <h5>Perfil</h5> -->
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s12">
                                <input id="nombre_usuario_perfil" type="text" name="nombre_usuario_perfil" class="validate" value="<?php echo $row['nombre']?>">
                                <label for="nombre_usuario_perfil">Nombre de usuario</label>
                        </div>
                    </div>
                    <!-- <div id="form-div-input-form-perfil" class="row">
                      <div class="col s12">
                        <label>
                            <input class="with-gap" name="genero" type="radio" value="hombre"/>
                            <span>Hombre</span>
                        </label>
                        <label>
                            <input class="with-gap" name="genero" type="radio" value="mujer"/>
                            <span>Mujer</span>
                        </label>
                      </div>
                    </div> -->
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s12">
                            <input type="text" name="fecha-cumpleanos" class="datepicker" value="<?php echo $row['fecha_cumpleanos'] ?>">
                            <label for="autor">Fecha de cumpleaños</label>
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s4 m4 l6 offset-l3 offset-s4 offset-m4">
                            <button id="btn-perfil" type="submit" name="btn-perfil" class="btn red">Guardar cambios</button>
                        </div>
                    </div>
                    <?php
                         }
                     }
                 }
                    ?>
                </form>
            </div>
          </div>
          <div id="imagen">
            <div id="div-row-edit-profile" class="row">
              <form id="form-div-perfil-imagen" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post" enctype="multipart/form-data">
                <div id="form-div-input-form-perfil" class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagen</span>
                            <input id="imagen-perfil-user" type="file" name="imagen-perfil-user">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div id="form-div-input-form-perfil" class="row">
                    <div class="input-field col s4 m4 l6 offset-l3 offset-s4 offset-m4">
                        <button id="btn-update-image" type="submit" name="btn-update-image" class="btn red">Actualizar</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <div id="baja">
            <div id="div-row-edit-profile" class="row">
              <form id="form-div-perfil-baja" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post" enctype="multipart/form-data">
                <div id="form-div-input-form-perfil" class="row">
                    <div class="input-field col s12 m12 l12 center">
                      <button type="button" class="btn red modal-trigger center" data-target="modal">Dar de baja</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
          <div id="modal" class="modal">
            <form  action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
              <h5>¿Está seguro/a de dar de baja a esta cuenta?</h5>
              <div id="form-div-input-form-perfil" class="row">
                  <div class="input-field col s12">
                    <input id="password_confirmar_dar_baja" type="password" name="password-confirmar-dar-baja">
                    <label for="password-confirmar-dar-baja">Introdusca contraseña</label>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <div id="form-div-input-form" class="row">
                  <div class="input-field col s12">
                    <button id="btn-baja-usuario" type="submit"  name="btn-baja-usuario" class="btn red modal-close  waves-effect waves-red">Acceptar</button>
                  </div>
              </div>
            </div>
          </form>
          </div>
            <!-- Back to top -->
            <div class="fixed-action-btn">
                <a id="back-to-top" class="btn-floating btn-large red scale-transition">
                    <i class="large material-icons">keyboard_arrow_up</i>
                </a>
            </div>
        </main>
        <!--################################-->
        <!--################ FOOTER ################-->
        <?php include 'footer.php'; ?>
            <!--################################-->

            <!--Import jQuery before materialize.js -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
            <script type="text/javascript" src="scripts/comun.js"></script>
            <script type="text/javascript" src="scripts/editPerfil.js"></script>
</body>

</html>
