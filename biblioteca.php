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
    <link rel="stylesheet" href="css/biblioteca.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--################ BAR NAV ################-->
    <header>
        <nav class="nav-border">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s12 m12 l8 offset-l2">
                        <div class="col s12 m12 l6">
                            <a href="#" style="margin-right: -1.7%;" class="right sidenav-trigger" data-target="mobile-nav">
                                <i class="material-icons">menu</i>

                            </a>
                            <a href="#"><i class="material-icons right hide-on-large-only">search</i></a>
                            <ul id="ul-div-nav-links" style="margin-left: -23px;" class="left">
                                <li>
                                    <a class="search-hide" href="index.php">Logo</a>
                                </li>
                                <li>
                                    <a class="search-hide" href="biblioteca.php">Biblioteca</a>
                                </li>
                                <li>
                                    <a class="search-hide" href="#">Wiki</a>
                                </li>
                                <li>
                                    <a class="search-hide" href="#">Noticias</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 m2 l4">
                            <div class="navfix hide-on-med-and-down">
                                <div id="nav-div-search">
                                    <div class="input-field">
                                        <input id="input-div-nav-search" type="search" required="" placeholder="Buscar..." class="searchbarfix white">
                                        <label id="label-div-nav-icon-search" class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m2 l2">
                            <ul id="ul-div-nav-dropdown" class="hide-on-med-and-down right">
                                <li>
                                    <a style="margin-right: -23px;" id="a-div-login" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Bar nav mobile -->
        <ul id="mobile-nav" class="sidenav right">
            <li style="border-bottom: solid;">
                <div id="div-nav-login-form" style="width: 90%; margin-left: 15px;">
                    <form action="" method="post">
                        <div class="input-field">
                            <i class="material-icons iconis prefix">account_box</i>
                            <input type="text" placeholder="nombre">
                        </div>
                        <div class="input-field">
                            <i class="material-icons iconis prefix">lock</i>
                            <input type="password" placeholder="contraseña">
                        </div>
                        <button id="btn-div-login-form-inicio-sesion" class="btn waves-effect waves-red white-text red" type="submit" name="action">Inciar sesión</button>
                    </form>
                    <ul>
                        <li><a style="font-size: 8px;" href="registro.php">Registrar</a></li>
                        <li><a style="font-size: 8px;" href="#">¿Olvidates tu contraseña? </a></li>
                    </ul>
                </div>
            </li>
            <li><a href="biblioteca.php">Biblioteca</a></li>
            <li><a href="#">Wiki</a></li>
            <li><a href="#">Noticas</a></li>

        </ul>
    </header>

    <!-- Div content login -->
    <div id="div-nav-login-form" class="webui-popover-content">
        <form action="" method="post">
            <div class="input-field">
                <i class="material-icons iconis prefix">account_box</i>
                <input type="text" placeholder="nombre">
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix">lock</i>
                <input type="password" placeholder="contraseña">
            </div>
            <button id="btn-div-login-form-inicio-sesion" class="btn waves-effect waves-red white-text red" type="submit" name="action">Inciar sesión</button>
        </form>
        <br>
        <ul>
            <li><a href="registro.php">Registrar</a></li>
            <li>&nbsp</li>
            <li><a href="#">¿Olvidates tu contraseña? </a></li>
        </ul>
    </div>
    <!--################################-->
    <main>

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
    <script type="text/javascript" src="scripts/comun.js"></script>
</body>

</html>
