<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
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
    <link rel="stylesheet" href="css/index.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style type="text/css">
        @media only screen and (max-width: 600px) {
            .searchbarfix {
                height: 56px !important;
            }
        }

        @media only screen and (min-width: 601px) {
            .searchbarfix {
                height: 40px !important;
            }
        }

        .navfix {
            position: relative;
            margin-right: 0;
        }

    </style>

</head>

<body>
    <!--################ BAR NAV ################-->
    <header>
        <nav class="nav-border">
            <div class="nav-wrapper">
                <div class="row">
                  <div class="col s12 m12 l10 offset-l1">
                    <div class="col s12 m12 l5">
                      <a href="#" class="right sidenav-trigger" data-target="mobile-nav">
                          <i class="material-icons">menu</i>
                      </a>
                        <ul id="ul-div-nav-links" style="margin-left: -20px;" class="left">
                           <li>
                              <a class="search-hide" href="#">Logo</a>
                           </li>
                            <li>
                                <a class="search-hide" href="#">Biblioteca</a>
                            </li>
                            <li>
                                <a class="search-hide" href="#">Wiki</a>
                            </li>
                            <li>
                                <a class="search-hide" href="#">Noticias</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col s12 m2 l5">
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
                                <a style="margin-right: -24px;"  id="a-div-login" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Bar nav mobile -->
    <ul class="sidenav left" id="mobile-nav">
        <li><a href="#">Biblioteca</a></li>
        <li><a href="#">Wiki</a></li>
        <li><a href="#">Noticas</a></li>
        <li><a href="#">Perfil</a></li>
    </ul>
    <!-- Div content login -->
    <div id="div-nav-login-form" style="" class="webui-popover-content">
        <form action="" method="post">
            <div class="input-field">
                <i class="material-icons iconis prefix">account_box</i>
                <input type="text" placeholder="username">
            </div>
            <div class="input-field">
                <i class="material-icons iconis prefix">lock</i>
                <input type="password" placeholder="password">
            </div>
            <button id="btn-div-login-form-inicio-sesion" class="btn waves-effect black-text" type="submit" name="action">Inciar sesión</button>
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
        <!--################ POPULAR AND RANKING ################-->
        <div id="div-content">
            <div class="row">
                <!--################ POPULAR ################-->
                <div id="div-content-popular" class="carousel carousel-slider center col s12 m12 l10 offset-l1">
                    <div class="carousel-fixed-item center">
                        <!-- Timer "progress bar"-->
                        <hr class="carousel-progress-bar-timer animate" />
                    </div>
                    <div class="carousel-item red white-text" href="#one!">
                        <h2>First Panel</h2>
                        <p class="white-text">This is your first panel</p>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>Second Panel</h2>
                        <p class="white-text">This is your second panel</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Third Panel</h2>
                        <p class="white-text">This is your third panel</p>
                    </div>
                    <div class="carousel-item pink white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div>
                </div>
            </div>
            <!--################ RECOMENDATIONS ################-->
            <div class="row">
                <div id="div-content-two" style="height: 100px;"class="col s12 m1 l10 offset-l1 blue">
                </div>
            </div>
        </div>
        <!-- Back to top -->
        <div class="fixed-action-btn">
            <a id="back-to-top" class="btn-floating btn-large grey darken-4 scale-transition">
                <i class="large material-icons">keyboard_arrow_up</i>
            </a>
        </div>
    </main>
    <!--################################-->
    <!--################ FOOTER ################-->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="white-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
                <a class="white-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    <!--################################-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*################ DROPDOWN DIV DEL LOGIN ################*/
            $('#a-div-login').webuiPopover({
                html: true,
                url: '#div-nav-login-form',
                animation: 'fade',
                placement: 'bottom-left'
            });

            /*################ BOTÓN PARA REGRESAR A LA PARTE SUPERIOR DE LA PÁGINA ################*/
            if ($('#back-to-top').length) {
                var scrollTrigger = 100, // px
                    backToTop = function() {
                        var scrollTop = $(window).scrollTop();
                        if (scrollTop > scrollTrigger) {
                            $('#back-to-top').removeClass('scale-out');
                        } else {
                            $('#back-to-top').addClass('scale-out');
                        }
                    };
                backToTop();
                $(window).on('scroll', function() {
                    backToTop();
                });

                $('#back-to-top').on('click', function(e) {
                    e.preventDefault();
                    $('html,body').animate({
                        scrollTop: 0
                    }, 700);
                });
            }
        });
    </script>
</body>

</html>
