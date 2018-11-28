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
            <div class="col s12 m2 l4">
            </div>
            <form id="form-div-registro" class="col s12 m8 l4">
                <div class="row">
                    <div class="col s12 m12 l12 center">
                        <h5>Registro</h5>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Nombre</label>
                    </div>
                </div>
                <!--<div id="form-div-input-form" class="row">
                    <div class="input-field col s6">
                      <p>
                        <label>
                          <input name="group1" type="radio"/>
                          <span>Hombre</span>
                        </label>
                      </p>
                    </div>
                    <div class="input-field col s6">
                      <p>
                        <label>
                          <input name="group1" type="radio"/>
                          <span>Mujer</span>
                        </label>
                      </p>
                    </div>
                </div>
              -->
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Contraseña</label>
                    </div>
                </div>
                <div id="form-div-input-form" class="row">
                    <div class="input-field col s12 m12">
                        <input id="password-confirm" type="password" class="validate">
                        <label for="password-confirm">Confirma tu contraseña</label>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!--################ FOOTER ################-->
    <footer id="footer" class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/registro.js"></script>
</body>

</html>
