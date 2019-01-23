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
    <?php include 'nav.php';?>
        <!--################################-->

        <main>
            <div id="div-row-edit-profile" class="row">
                <form id="form-div-perfil" class="col s12 m8 l4 offset-l4 offset-m2" action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col s12 m12 l12 center">
                            <h5>Perfil</h5>
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s12">
                            <?php
                             if (isset($_SESSION['username'])) {
                                 $user = $_SESSION['username'];
                                 $query = mysqli_query($conn, "SELECT * FROM Users WHERE nombre='$user' OR correo='$user'");
                                 if (mysqli_num_rows($query) > 0) {
                                     while ($row = mysqli_fetch_assoc($query)) {
                                         ?>
                                <input id="nombre_usuario" type="text" name="nombre_usuario" class="validate" value="<?php echo $row['nombre']?>">
                                <label for="nombre_usuario">Nombre de usuario</label>

                                <?php
                                     }
                                 }
                             }
                                ?>
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                      <div class="col s12">
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Hombre</span>
                        </label>
                        <label>
                            <input class="with-gap" name="group1" type="radio" />
                            <span>Mujer</span>
                        </label>
                      </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s12">
                            <input type="text" class="datepicker">
                            <label for="autor">Fecha de cumpleaños</label>
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>Imagen</span>
                                <input id="imagen-book" type="file" name="fileimgbook">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div id="form-div-input-form-perfil" class="row">
                        <div class="input-field col s4 m4 l6 offset-l4 offset-s4 offset-m4">
                            <button type="submit" name="btn-update-perfil-usuario" class="btn red">Guardar cambios</button>
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