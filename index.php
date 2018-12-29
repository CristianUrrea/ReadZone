<?php //include("db/conexiondb.php");?>

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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <!--################ NAV ################-->
    <?php include 'nav.php'; ?>
        <!--################################-->

        <main>
            <!--################ POPULAR AND RANKING ################-->
            <div id="div-content">
                <div class="row">
                    <!--################ POPULAR ################-->
                    <div id="div-content-carousel-popular" class="carousel carousel-slider center col s12 m12 l8 offset-l2">
                        <!--<div class="carousel-fixed-item center middle-indicator">
                        <div class="left">
                            <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
                        </div>

                        <div class="right">
                            <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
                        </div>
                    </div>
                  -->
                        <div class="carousel-fixed-item center">
                            <!-- Timer "progress bar"-->
                            <hr class="carousel-progress-bar-timer animate" />
                        </div>
                        <a href="contenido.php">
                            <div class="carousel-item orange white-text" href="#one!">
                                <h2>Primer libro</h2>

                                <p class="white-text">This is your first panel</p>
                            </div>
                        </a>
                        <a href="contenido.php">
                            <div class="carousel-item amber white-text" href="#two!">
                                <h2>Primer manga</h2>
                                <p class="white-text">This is your second panel</p>
                            </div>
                        </a>
                        <a href="contenido.php">
                            <div class="carousel-item green white-text" href="#three!">
                                <h2>Primera novela</h2>
                                <p class="white-text">This is your third panel</p>
                            </div>
                        </a>
                        <a href="contenido.php">
                            <div class="carousel-item grey white-text" href="#four!">
                                <h2>Primer comic</h2>
                                <p class="white-text">This is your fourth panel</p>
                            </div>
                        </a>

                    </div>
                </div>
                <!--################ RECOMENDATIONS LIBROS ################-->
                <div id="div-content-recomendations" class="row">
                    <div class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones libros</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--################ RECOMENDATIONS MANGAS ################-->
                    <div style="margin-top: 10px;" class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones mangas</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--################ RECOMENDATIONS NOVELAS ################-->
                    <div style="margin-top: 10px;" class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones novelas</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--################ RECOMENDATIONS COMICS ################-->
                    <div style="margin-top: 10px;" class="col s12 m12 l8 offset-l2">
                        <h5>Recomendaciones comics</h5>
                    </div>
                    <div id="div-content-recomendations-gallery" class="col s12 m12 l8 offset-l2 colgallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                        <div class="gallery-cell">
                            <div class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-cell">
                            <div style="" class="card sticky-action">
                                <div class="card-image ">
                                    <a href="contenido.php"><img src="http://placehold.it/1920/999/fff"></img>
                                    </a>
                                </div>
                                <div class="card-content">
                                    <p>I am a very simple card.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <!--Import jQuery before webuiPopover.js -->
            <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
            <!-- Import flickty -->
            <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

            <script type="text/javascript" src="scripts/comun.js"></script>
            <script type="text/javascript" src="scripts/index.js"></script>
</body>

</html>
