<?php include('acciones/server.php') ?>
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

<body>
    <main>
        <div class="row">
            <div class="col s12 m12 l12 center">
                <a hef="#!" class="brand-logo"><i class="material-icons">tag_faces</i></a>
            </div>
        </div>
        <div class="row">
            <form id="form-div-registro" class="col s12 m8 l4 offset-l4 offset-m2" action="registro.php" method="post">
              <?php include('acciones/errors.php'); ?>
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <h5>Registro</h5>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="username" type="text" name="username" class="validate" aria-required="false" value="">
                        <label for="username">Nombre de usuario</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="useremail" type="email" name="useremail" class="validate" aria-required="false" value="">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="userpass_1" type="password" name="userpass_1" class="validate" aria-required="false">
                        <label for="password">Contraseña</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12 m12">
                        <input id="userpass_2" type="password" name="userpass_2" class="validate" aria-required="false">
                        <label for="password-confirm">Confirma tu contraseña</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="col s12 m12">
                      <label>
                        <input type="checkbox" class="filled-in"  aria-required="false">
                        <span>Aceptar términos y condiciones</span>
                      </label>
                    </div>
                </div>
                <br>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12 m12 l2 offset-l4">
                        <button id="btn-registro" type="submit" name="btn-registro" class="btn red">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--################ FOOTER ################-->
    <?php include 'footer.php'; ?>
        <!--################################-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/registro.js"></script>
</body>

</html>
