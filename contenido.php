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
    <link rel="stylesheet" href="css/contenido.css">
    <link rel="stylesheet" href="css/comun.css">
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <!--################ BAR NAV ################-->

        <nav class="nav-border">
            <div class="row">
                <div class="col s12 m12 l8 offset-l2">
                    <div class="col s12 m12 l6 nav-wrapper">
                        <a id="nav-a-icon-menu-sidenav" href="#" class="right sidenav-trigger" data-target="mobile-nav">
                            <i class="material-icons">menu</i>
                        </a>
                        <!--<a href="#"><i class="material-icons right hide-on-large-only">search</i></a>-->
                        <ul id="ul-div-nav-links" class="left">
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
                        <div class="hide-on-med-and-down">
                            <div id="nav-div-search" class="search-wrapper">
                                <div class="input-field">
                                    <input id="input-div-nav-search" type="search" placeholder="Buscar..." class="right searchbarfix white">
                                    <i id="i-div-nav-search" class="material-icons grey-text">search</i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m2 l2 nav-wrapper">
                        <ul id="ul-div-nav-dropdown" class="hide-on-med-and-down right">
                            <li>
                                <a id="a-div-login" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Bar nav mobile -->
        <ul id="mobile-nav" class="sidenav right">
            <li id="li-nav-login-form">
                <div id="div-nav-login-form" style="">
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
                        <li><a href="registro.php">Registrar</a></li>
                        <li><a href="#">¿Olvidates tu contraseña? </a></li>
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
            <button id="btn-div-login-form-inicio-sesion-2" class="btn waves-effect waves-red white-text red" type="submit" name="action">Inciar sesión</button>
        </form>
        <br>
        <ul>
            <li><a style="font-size: 13px;" href="registro.php">Registrar</a></li>
            <li><a style="font-size: 13px;"href="#">¿Olvidates tu contraseña?</a></li>
        </ul>
    </div>
    <!--################################-->

    <main>
        <div id="div-row-contenido-info" class="row">
            <div class="col s12 m12 l8 offset-l2">
                <div class="card horizontal">
                    <div class="card-image">
                        <img style="height:200px;" src="http://placehold.it/1920/999/fff" class="fadeIn">
                        <div class="card-content">
                            <p>I am a very simple card.</p>
                        </div>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <span class="card-title">Lorem fistrum</span>
                            <p>amatomaa diodeno no puedor te va a hasé pupitaa sexuarl te voy a borrar el cerito no puedor a wan a peich. Te va a hasé pupitaa jarl la caidita a wan está la cosa muy malar
                            </p>
                        </div>
                        <div class="card-action">
                            <p>Generos</p>
                            <p>Autor</p>
                        </div>
                    </div>
                </div>
                <div id="div-card-horizontal" class="card horizontal red">
                    <div class="card-stacked center">
                        <ul id="div-ul-like-favorite-add-list">
                            <li><a href=""><i class="material-icons white-text">thumb_up</i></a></li>
                            <li><a href=""><i class="material-icons white-text">thumb_down</i></a></li>
                            <li><a href=""><i class="material-icons white-text">favorite</i></a></li>
                            <li><a href=""><i class="material-icons white-text">library_add</i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l8 offset-l2">
              <table style="background-color: white;"cellpadding="1" cellspacing="1" class="table table-hover" id="myTable">
          <tbody>
            <tr>
            	<td>Capitulo1</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo2</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo3</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo4</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo5</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo6</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo7</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo8</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo9</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo10</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo11</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo12</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo13</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo14</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo15</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo16</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
              <td>Capitulo17</td>
              <td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo18</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo19</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            <tr>
            	<td>Capitulo20</td>
            	<td><a href="#!" class="secondary-content"><i class="material-icons">visibility_off</i></a></td>
            </tr>
            </tbody>
          </table>
                <!--<button id="btn-read-more" type="button" name="button" class="col s12 m12 l12 btn red white-text">Ver más</button>-->
                <div class="col-md-12 center text-center">
                  <ul class="pagination pager" id="myPager"></ul>
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
    <script type="text/javascript" src="https://cdn.rawgit.com/pinzon1992/materialize_table_pagination/f9a8478f/js/pagination.js"></script>
    <script type="text/javascript" src="scripts/comun.js"></script>
    <script type="text/javascript" src="scripts/contenido.js"></script>
    <script type="text/javascript">
    $('#myTable').pageMe({
       pagerSelector:'#myPager',
       activeColor: 'red',
       prevText:'Anterior',
       nextText:'Siguiente',
       showPrevNext:true,
       hidePageNumbers:false,
       perPage:10
      });
    </script>
</body>

</html>
