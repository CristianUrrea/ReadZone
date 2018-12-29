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
  <!--################ NAV ################-->
  <?php include 'nav.php'; ?>
      <!--################################-->

    <main>
        <div id="div-search-type">
            <div id="div-row-search-input" class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <div class="col s3 m3 l3">
                        <button id="btn-search-advanced" class="btn" type="button" name="button">Búsqueda avanzada<i class="material-icons right">arrow_drop_down</i></button>
                    </div>
                    <div class="search-wrapper">
                        <div id="div-type-search-one" class="input-field col s9 m9 l9">
                            <input id="input-div-search" type="search" placeholder="Buscar..." class="right searchbarfix white">
                            <i class="material-icons grey-text">search</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="div-biblioteca" style="" class="col s12 m12 l8 offset-l2 cards-container">
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card sticky-action">
                        <div class="card-image ">
                            <img style="" src="http://placehold.it/1920/999/fff"> </img>
                        </div>
                        <div class="card-content">
                            <p>I am a very simple card.</p>
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

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import jQuery before webuiPopover.js-->
    <script src='https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js'></script>
    <script type="text/javascript" src="scripts/comun.js"></script>
</body>

</html>
