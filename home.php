<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>ReadZone</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- My css -->
    <link rel="stylesheet" href="css/home.css">
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
                height: 54px !important;
            }
        }
        .navfix {
            position: relative;
            margin-right: 0;
        }
        .navfix2 {
            position: absolute;
        }
    </style>
</head>

<body>
    <!--################ BAR NAV ################-->
    <header>
        <div class="navbar-fixed">
            <nav class="nav-border">
                <div class="nav-wrapper">
                    <div class="row">
                        <div class="col s12 m2 l2 center">
                            <a hef="#!" class="brand-logo "><i class="material-icons">tag_faces</i></a>
                            <a href="#" class="left sidenav-trigger" data-target="mobile-nav">
                                <i class="material-icons white-text">menu</i>
                            </a>
                        </div>
                        <div class="col s12 m4 l5">
                            <ul id="ul-div-nav-home" class="hide-on-med-and-down">
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
                        <div class="col s12 m3 l2">
                            <ul class="right hide-on-med-and-down">
                                <li>
                                    <form id="navbarsearch">
                                        <div class="navfix">
                                            <div id="navfix2" style="">
                                                <div class="input-field">
                                                    <input id="search" type="search" style="" required="" placeholder="Buscar..." class="searchbarfix white">
                                                    <label id="icon-search" class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
                                                    <i id="icon-search" class="material-icons">close</i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 m3 l3">
                            <ul class="hide-on-med-and-down">
                                <li><a href="#" class="white-text">Login</a></li>
                                <li><a href="#" class="white-text">Registro</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Bar nav mobile -->
    <ul class="sidenav left" id="mobile-nav">
        <li><a href="#">Biblioteca</a></li>
        <li><a href="#">Wiki</a></li>
        <li><a href="#">Noticas</a></li>
        <li><a href="#">Perfil</a></li>
    </ul>
    <!--################################-->
    <main>

        <!--################ POPULAR AND RANKING ################-->
        <div id="divFather">
            <div class="row">
                <div class="col s12 m1 l1">
                </div>
                <!--################ POPULAR ################-->
                <div class="carousel carousel-slider center col s12 m10 l7">
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
                <div class="col s15">
                </div>
                <!--################ RANKING ################-->
                <div id="div2" class="col s12 m3 l3 hide-on-med-and-down">

                </div>
                <div class="col s12 m1 l1">
                </div>
            </div>
            <!--################ RECOMENDATIONS ################-->
            <div id="divFather2">
                <div class="col s12 m1 l1">
                </div>
                <div id="div3" class="col s12 m10 l10">
                </div>
                <div class="col s12 m1 l1">
                </div>
            </div>
        </div>
    </main>
    <!--################################-->
    <!--################ FOOTER ################-->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
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
    <!--################################-->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/home.js"></script>
</body>

</html>
